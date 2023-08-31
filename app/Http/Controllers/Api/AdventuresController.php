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

     $data = TourAdventur::with('user')->get();

        return response()->json([
            'status' => true,
            'message' => 'Success',
            'data' => $data
        ]);
    }


    public function show($id)
    {
        $data = TourAdventur::with('user')->first();

        return response()->json([
            'status' => true,
            'message' => 'Success',
            'data' => $data
        ]);
    }
}
