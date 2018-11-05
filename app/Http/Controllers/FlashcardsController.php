<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flashcard;

class FlashcardsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Flashcard::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Flashcard::create($request->only(['front', 'back', 'active']));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Flashcard  $flashcard
     * @return \Illuminate\Http\Response
     */
    public function show(Flashcard $flashcard)
    {
        return $flashcard;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Flashcard  $flashcard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flashcard $flashcard)
    {
        return $flashcard->update($request->only(['front', 'back', 'active']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Flashcard  $flashcard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flashcard $flashcard)
    {
        return Flashcard::destroy($flashcard->id);
    }
}
