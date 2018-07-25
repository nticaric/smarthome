<?php

namespace App\Http\Controllers;

use App\Temperature;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function temperature()
    {
        $temperatures = Temperature::all();
        return view('temperature.index', compact('temperatures'));
    }
}
