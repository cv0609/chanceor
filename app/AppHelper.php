<?php

use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use App\Services\ApiFootballService;
use App\Models\PlayerStatistic;
use Carbon\CarbonTimeZone;


function LeagueTeamPlayerValidation($team_id, $player_id, $player_role, $leagueId, $player_name)
{
    $roleLimits = [
        'F' => 1,  // Goalkeeper count
        'G' => ['min' => 1, 'max' => 3],  // Defender count
        'C' => ['min' => 1, 'max' => 1],  // Midfielder count
        // 'F' => ['min' => 1, 'max' => 3]   // Striker count
    ];

    if (!isset($team_id, $player_id, $player_role, $leagueId, $player_name)) {
        return ['success' => false, 'message' => 'Cannot add player.'];
    }

    $myTeam = Session::get('myTeam', []);

    $roleCounts = [
        'F' => 0, // Goalkeeper
        'G' => 0, // Defender
        'C' => 0, // Midfielder
        // 'F' => 0  // Striker
    ];

    foreach ($myTeam as $player) {
        if (isset($player['player_role'])) {
            $roleCounts[$player['player_role']]++;
        }
    }

    $totalPlayers = array_sum($roleCounts);

    // Check if adding this player would exceed 11 players
    if ($totalPlayers > 5) {
        return ['success' => false, 'message' => 'Team cannot exceed 11 players.'];
    }

    $response = ['success' => true, 'message' => 'Player added successfully'];

    switch ($player_role) {
        case 'F':
            if ($roleCounts['F'] >= $roleLimits['F']) {
                $response = ['success' => false, 'message' => 'You can add only one forword player.'];
            }
            break;

        case 'G':
            if ($roleCounts['G'] >= $roleLimits['G']['max']) {
                $response = ['success' => false, 'message' => 'You can add only between ' . $roleLimits['G']['min'] . ' and ' . $roleLimits['G']['max'] . ' golf.'];
            }
            break;

        case 'C':
            if ($roleCounts['C'] >= $roleLimits['C']['max']) {
                $response = ['success' => false, 'message' => 'You can add only between ' . $roleLimits['C']['min'] . ' and ' . $roleLimits['C']['max'] . ' center player.'];
            }
            break;

        // case 'F':
        //     if ($roleCounts['F'] >= $roleLimits['F']['max']) {
        //         $response = ['success' => false, 'message' => 'You can add only between ' . $roleLimits['F']['min'] . ' and ' . $roleLimits['F']['max'] . ' strikers.'];
        //     }
        //     break;

        default:
            $response = ['success' => false, 'message' => 'Invalid player role.'];
    }

    $totalPlayers = array_sum($roleCounts) + 1;
    // dd($totalPlayers);
    // if ($totalPlayers > 5) {
    //     $response = ['success' => false, 'message' => 'Total players must be exactly 11.'];
    // }

    return $response;
}

function getMatchStatus($date)
{
    $startTime = Carbon::now();  // Keep this as a Carbon object
    $endTime = Carbon::parse($date);  //$date is utc timezone
    $minutesDifference = $startTime->diffInMinutes($endTime);
    return $minutesDifference; // Outputs the difference in minutes
}

// function checkMatch($leagueId)
//  {
//     $res = false;
//     $apiFootballService = app(ApiFootballService::class);
//     $matches =$apiFootballService->get('/fixtures', [
//         'league' => $leagueId,
//         'from' => Carbon::now()->format('Y-m-d'),
//         'to' => Carbon::now()->addYear(100)->format('Y-m-d'),
//         'season' =>  Carbon::now()->format('Y')
//     ]);

//     if(!empty($matches['response']))
//     {
//         $res = true;
//     }
//     return $res;
//  }
?>
