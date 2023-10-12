<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pemain;

class pemain_controller extends Controller
{
    public function index(){
    $data_pemain = pemain::all();
    return view('home', compact('data_pemain'));
    }
}
