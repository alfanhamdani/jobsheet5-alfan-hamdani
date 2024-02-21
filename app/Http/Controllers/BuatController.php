<?php

namespace App\Http\Controllers;

use view;
use Illuminate\Http\Request;

class BuatController extends Controller
{
    public function index()
    {
        return view('buat.index');  
    }
}
