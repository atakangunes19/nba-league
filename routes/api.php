<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    TournamentController,
    SimulationController,
    ClubController
};

Route::apiResources([
    'tournaments' => TournamentController::class
]);


Route::controller(ClubController::class)->prefix('club')->group(function () {
    Route::get('clubs', 'clubs');

});

Route::controller(SimulationController::class)->prefix('tournaments/{tournament}/simulation')->group(function () {
    Route::get('result', 'result');
    Route::post('play-next-minute', 'playNextMinute');
});
