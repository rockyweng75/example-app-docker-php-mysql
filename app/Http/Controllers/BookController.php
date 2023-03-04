<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class BookController extends BaseController
{

    public function get(){

        $data = [
            [
                'id' => 1,
                'name' => 'test1',
            ],
            [
                'id' => 2,
                'name' => 'test2',
            ],
        ];

        $res = array_filter($data, function($var){ return $var['id'] != 1; });

        return response()->json([
            'success' => true,
            'msg' => $res,
        ]);
    }

    public function new(Request $request){




        return response()->json([
            'success' => true,
            'msg' => $request,
        ]);
    }
}
