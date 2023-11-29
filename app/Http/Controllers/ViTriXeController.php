<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ViTriXe;
use App\Models\Xe;

class ViTriXeController extends Controller
{
    //
    public function index() {
        $data = Xe::select("*")->where('isShow', true)->orderBy('id','desc')->get();
        return view('server.vitrixe.vitrixe', ['xe' => $data]);
    }

    public function loadData() {
        $data = ViTriXe::all();
        if ($data)
            return response()->json([
                'code' => 200,
                'message' => 'Load data success',
                'data' => $data,
            ]);
        else
            return response()->json([
                'code' => 500,
                'message' => 'Load data fail',
                'data' => null,
            ]); 
    }
}
