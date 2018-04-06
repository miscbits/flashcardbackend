<?php

namespace App\Services;

use App\Section;

class SectionService
{
    private $section;

    function __construct(Section $section) 
    {
        $this->section = $section;
    }

    function find($id) {
        return $this->section->find($id);
    }

    function all() {
        return $this->section->all();
    }

    function paginate() {
        return $this->section->paginate();
    }

    function store($fields) {
        return $this->section->create($fields);
    }

    function update($id, $fields) {
        return $this->section->where('id', $id)->update($fields);
    }

    function destroy($id) {
        return $this->section->destroy($id);
    }
}