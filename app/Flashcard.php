<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flashcard extends Model
{
    public function scopeActive($query)
    {
        return $query->where('active', true);
    }

    protected $fillable = [
    	"back",
    	"front",
    	"active",
    ];
}
