<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Xe;

class XeController extends Controller
{
    //
    public function index() {
        return view('server.xe.xe');
    }

    public function loadData() {
        $arr = [];
        $data = Xe::select("*")->orderBy('id', 'desc')->get();
        foreach($data as $row) {
            $temp = $row;
            $dongXe = DongXe::find($row->idDongXe);
            $temp->dongXe = $dongXe->name;
            array_push($arr, $temp);
        }

        if ($data)
            return response()->json([
                'status_code' => 200,
                'message' => 'Load data success',
                'data' => $arr,
            ]);
        else
            return response()->json([
                'status_code' => 500,
                'message' => 'Load data fail',
                'data' => null,
            ]); 
    }

    public function themMoi() {
        return view('server.xe.themmoi');
    }

}
