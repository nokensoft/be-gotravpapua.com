<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TourAdventur;
use App\Http\Resources\PostResource;

class AdventuresController extends Controller
{
    public function index()
    {

     $data = TourAdventur::join('users','tour_adventurs.user_id', '=' , 'users.id')->get();
        return response()->json([
            'status' => true,
            'message' => 'List Data Tour Adventures',
            'data' => $data
        ]);
    }


    public function show($id)
    {
        $data = TourAdventur::join('users','tour_adventurs.user_id', '=' , 'users.id')->where('tour_adventurs.id', '=', $id)->first();

        return response()->json([
            'status' => true,
            'message' => 'Detail Data Tour Adventure',
            'data' => $data
        ]);
    }
}
