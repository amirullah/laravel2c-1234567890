<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //Mengakses index
    public function index()
    {
        // return "halaman Home";
        return view('welcome');
    }

    public function tampil()
    {
        return "halaman tampil";
    }
}
