<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index() {
        return view('server.taikhoan.quanlytaikhoan');
    }

    public function loadData() {
        $user = User::all();
        if ($user)
            return response()->json([
                'status_code' => 200,
                'message' => 'Load data success',
                'data' => $user,
            ]);
        else
            return response()->json([
                'status_code' => 500,
                'message' => 'Load data fail',
                'data' => null,
            ]); 
    }
}
