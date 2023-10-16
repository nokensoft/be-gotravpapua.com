<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TourMessages;
use Illuminate\Support\Facades\Validator;

class MessagesController extends Controller
{
    public function index()
    {

        // return response()->json([
        //     'status'=>true,
        //     'message'=>'Data Loaded',
        //     'data'=> TourMessages::orderByDesc('created_at')->get(),
        // ]);

        $data = TourMessages::paginate();

        return response()->json([
            'status' => true,
            'message' => 'Success',
            'data' => $data
        ]);
    }

    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'name'     => 'required',
            'email'     => 'required',
            'phone'     => 'required',
            'message'  => 'required'
        ]);

        if($validasi->fails()){
            return response()->json([
                'status' => false,
                'email'=> $validasi->errors(),
                'phone'=> $validasi->errors(),
                'message'=> $validasi->errors(),
                'data' => null
            ]);
        }else{
            $post   = new TourMessages;
            $post->name    = $request->name;
            $post->email    = $request->email;
            $post->phone    = $request->phone;
            $post->message      = $request->message;

            if($post->save()){
                return response()->json([
                    'status'=> true,
                    'message'=>'Data has been send'
                ]);
            }else{
                return response()->json([
                    'status'=> false,
                    'message'=>'Failed'
                ]);
            }
        }
    }
}


