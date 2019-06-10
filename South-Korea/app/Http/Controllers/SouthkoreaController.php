<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SouthkoreaController extends Controller
{
    public function Home(){
        $title="South Korea";
        return view('index',compact('title'));
    }
    public function fedding(){
        $title="Fedding";
        return view('food',compact('title'));
    }
}
