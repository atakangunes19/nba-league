<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;

class ClubController extends Controller
{
    public function clubs(){
        $clubs = Club::orderBy('id', 'desc')
            ->get();

        return json_encode($clubs);
    }
}
