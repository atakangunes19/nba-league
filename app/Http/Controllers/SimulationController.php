<?php

namespace App\Http\Controllers;

use App\Models\{Club, Competition, Tournament};

class SimulationController extends Controller
{

    public function result(Tournament $tournament){

        $data = $this->findById($tournament['id']);

        $clubs = Club::select('id', 'name')
            ->orderBy('id', 'asc')
            ->get()
            ->toArray();

        $matches = [];
        foreach ($clubs as $club) {

            $matches[$club['id']] = $club['name'];
        }

        $data['matches'] = $matches;

        return response()->json($data);
    }

    public function playNextMinute(Tournament $tournament)
    {
        $competitions = $tournament->competitions()->with('homeTeam', 'awayTeam')->get()->toArray();

        foreach ($competitions as $competition) {
            $team = $competition;

            $home_team_score = $team['home_team_score'];
            $away_team_score = $team['away_team_score'];

            $n_home_team_score = 0;
            $n_away_team_score = 0;

            $home_team_power = $team['home_team']['power'];
            $away_team_power = $team['away_team']['power'];

            $dice = rand(0,100);

            if( $home_team_power > $dice-10 ){
                $n_home_team_score = rand(2,3);
            }

            if( $away_team_power > $dice-10 ){
                $n_away_team_score = rand(2,3);
            }

            if($home_team_power > $n_away_team_score && $home_team_power == 3){
                $x = rand(0,100);
                if($n_away_team_score+10 < $x){
                    $n_away_team_score = 0;
                }
            }

            Competition::find($competition['id'])->update(
                [
                    "home_team_score" => $n_home_team_score+$home_team_score,
                    "away_team_score" => $n_away_team_score+$away_team_score
                ]);

        }

        return response()->json();
    }

    public function findById(int $id)
    {
        return Tournament::with(['competitions', 'teams'])
            ->find($id);
    }
}
