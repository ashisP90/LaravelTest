<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataLoader extends Controller
{
     public function fetchData(Request $request){

        $data = [
            'status' => 'success',
            'message' => 'loading done',
            'data' => [
                'id' => 1,
                'name'=>'test dummt',
                'email'=> 'tets@gmail.com'
            ]
            ];

            return response()->json($data, 200);

     }
}
