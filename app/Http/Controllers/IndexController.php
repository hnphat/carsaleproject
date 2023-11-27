<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function getIndex() {
        $jsonString = file_get_contents('cauhinh/footer.json');
        $data = json_decode($jsonString, true);   
        return view('client.trangchu', ['data' => $data]);
    }

    public function getTin() {
        return view('client.tintuc');
    }

    public function getChiTietTin() {
        return view('client.tintucchitiet');
    }

    public function getXe() {
        return view('client.chitietxe');
    }
}
