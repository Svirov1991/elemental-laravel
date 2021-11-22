<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoremipsumController extends Controller
{
    public function index(){
        return view('loremipsum');
    }
}
