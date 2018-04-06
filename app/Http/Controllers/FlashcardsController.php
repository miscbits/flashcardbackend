<?php

namespace App\Http\Controllers;

use App\Services\FlashcardService;
use Illuminate\Http\Request;

class FlashcardsController extends Controller
{
    public $flashcardService;

    function __construct(FlashcardService $flashcardService)
    {
        $this->flashcardService = $flashcardService;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->flashcardService->paginate();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->flashcardService->store($request->all());
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
        return $this->flashcardService->update($flashcard->id, $request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Flashcard  $flashcard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flashcard $flashcard)
    {
        return $this->flashcardService->destroy($flashcard->id);
    }
}
