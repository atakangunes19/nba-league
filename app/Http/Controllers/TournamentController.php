<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use App\Models\Team;
use App\Models\Competition;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class TournamentController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Tournament::orderBy('id', 'desc')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : Collection
    {
        $teams = $request['teams'];

        $tournament = Tournament::create();
        $tournament->teams()->createMany($teams);

        $team_count = count($teams);
        $half_team_count = $team_count/2;

        $numbers = range(0, ($team_count-1));
        shuffle($numbers);

        $match_arr = [];

        for($i=0; $i<($team_count/2); $i++){
            $match_arr[] = [
                'home_team_id' => $teams[$numbers[$i]]['id'],
                'away_team_id' => $teams[$numbers[$i+$half_team_count]]['id']
            ];
        }

        return $tournament->competitions()->createMany($match_arr);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tournament $tournament)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tournament $tournament)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tournament $tournament)
    {
        //
    }
}
