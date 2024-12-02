<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\JokeContorller;

class JokeController extends Controller
{
    public function index(){
        return view('jokes.index');
    }
 }
