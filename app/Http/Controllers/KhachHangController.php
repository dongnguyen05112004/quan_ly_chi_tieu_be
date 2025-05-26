<?php

namespace App\Http\Controllers;

use App\DanhMuc;
use Illuminate\Http\Request;

class KhachHangController extends Controller
{
    public function getdata()
    {
        $data = DanhMuc::all();
            return response()->json([
                'data'      => $data
            ]);
    }
}
