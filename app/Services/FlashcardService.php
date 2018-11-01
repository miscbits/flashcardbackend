<?php

namespace App\Services;

use App\Flashcard;

class FlashcardService
{
    private $flashcard;

    function __construct(Flashcard $flashcard) 
    {
        $this->flashcard = $flashcard;
    }

    function find($id) {
        return $this->flashcard->active()->find($id);
    }

    function all() {
        return $this->flashcard->active()->get();
    }

    function paginate() {
        return $this->flashcard->paginate();
    }

    function store($fields) {
        return $this->flashcard->create($fields);
    }

    function update($id, $fields) {
        return $this->flashcard->where('id', $id)->update($fields);
    }

    function destroy($id) {
        return $this->flashcard->destroy($id);
    }
}
