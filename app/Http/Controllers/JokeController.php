<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Joke;

/**
 * Handles the CRUD operations for jokes.
 */
class JokeController extends Controller
{
    /**
     * Display a listing of all jokes.
     */
    public function index()
    {
        $jokes = Joke::simplePaginate(6);
        return view('jokes.index', ['jokes' => $jokes]);
    }

    /**
     * Show the form to create a new joke.
     */
    public function create()
    {
        return view('jokes.create');
    }

    /**
     * Store a newly created joke in the database.
     */
    public function store(Request $request)
    {
        $validatedData = $this->validateJoke($request);

        $joke = new Joke();
        $joke->setup = $validatedData['setup'];
        $joke->punchline = $validatedData['punchline'];
        $joke->save();

        return redirect('/jokes')->with('success', 'Joke added successfully! 🎉');
    }

    /**
     * Display the details of a specific joke.
     */
    public function show(string $id)
    {
        $joke = Joke::findOrFail($id);
        return view('jokes.show', compact('joke'));
    }

    /**
     * Show the form to edit a specific joke.
     */
    public function edit(Joke $joke)
    {
        return view('jokes.edit', compact('joke'));
    }

    /**
     * Update the details of a specific joke.
     */
    public function update(Request $request, Joke $joke)
    {
        $validatedData = $this->validateJoke($request);

        $joke->update($validatedData);

        return redirect('/jokes')->with('success', 'Joke updated successfully! ✍️');
    }

    /**
     * Delete a specific joke from the database.
     */
    public function destroy(Joke $joke)
    {
        $joke->delete();
        return redirect('/jokes')->with('success', 'Joke deleted successfully! 🗑️😢');
    }

    /**
     * Validate the joke data.
     */
    private function validateJoke(Request $request)
    {
        return $request->validate([
            'setup' => 'required|string|max:255',
            'punchline' => 'required|string|max:255',
        ]);
    }
}
