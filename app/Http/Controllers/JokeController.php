<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Joke;

class JokeController extends Controller
{
    public function index()
    {
        $jokes = Joke::all();

        return view('jokes.index', ['jokes' => $jokes]);
    }
}
