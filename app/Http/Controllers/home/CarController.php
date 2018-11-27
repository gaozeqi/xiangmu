<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    public function car()
    {
    	return view('home.car',['title'=>'购物车']);
    }
}
