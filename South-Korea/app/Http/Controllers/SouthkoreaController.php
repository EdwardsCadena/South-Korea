<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SouthkoreaController extends Controller
{
    public function Home(){
        return view('index');
    }
}
