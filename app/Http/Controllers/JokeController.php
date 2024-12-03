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

    public function create()
    {
        return view('jokes.create');
    }


    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'setup' => 'required|string|max:255',
            'punchline' => 'required|string|max:255',
        ]);

        // Create a new Joke using the validated data
        $joke = new Joke();

        $joke->setup = $validatedData['setup'];
        $joke->punchline = $validatedData['punchline'];

        $joke->save();

        // Redirect back to the jokes index
        return redirect('/jokes')->with('success', 'Joke added successfully! 🎉');
    }

    public function show(string $id)
    {
        $joke = Joke::findOrFail($id);

        return view('jokes.show', compact('joke'));

    }
}
