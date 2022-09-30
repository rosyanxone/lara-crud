<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $nama = "SatriaBagus";

        $matkul = ["Web", "IoT", "Logika Informatikas"];
        return view('biodata', ['nama' => $nama, 'matkul' => $matkul]);
    }
}
