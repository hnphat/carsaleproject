<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function getIndex() {
        return view('client.trangchu');
    }

    public function getTin() {
        return view('client.tintuc');
    }

    public function getChiTietTin() {
        return view('client.tintucchitiet');
    }
}
