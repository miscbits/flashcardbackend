<?php

use Illuminate\Database\Seeder;
use App\Flashcard;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(database_path('seeds/flashcards.json'));
        $data = collect(json_decode($json));

        $data->each(function($item, $key) {
            Flashcard::create([
                "front" => $item->front,
                "back" => $item->back,
                "active" => true
            ]);
        });
    }
}
