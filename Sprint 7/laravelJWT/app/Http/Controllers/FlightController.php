<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class FlightController extends Controller
{
    public function open() 
    {
        $data = "Semua data penerbangan boleh diakses";
        return response()->json(compact('data'),200);

    }

    public function closed() 
    {
        $data = "Selamat Datang, " . Auth::user()->name;
        return response()->json(compact('data'),200);
    }
}
