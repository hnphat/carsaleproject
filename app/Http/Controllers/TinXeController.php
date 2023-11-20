<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TinXe;

class TinXeController extends Controller
{
    //
    public function index() {
        return view('server.tinxe.tinxe');
    }

    public function loadData() {
        $data = TinXe::all();
        if ($data)
            return response()->json([
                'status_code' => 200,
                'message' => 'Load data success',
                'data' => $data,
            ]);
        else
            return response()->json([
                'status_code' => 500,
                'message' => 'Load data fail',
                'data' => null,
            ]); 
    }

    public function themMoi() {
        return view('server.tinxe.themmoi');
    }
}
