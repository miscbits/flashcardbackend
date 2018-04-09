<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->timestamps();
        });

        Schema::create('flashcard_section', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('section_id');
            $table->unsignedInteger('flashcard_id');

            $table->foreign('flashcard_id')
                ->references('id')->on('flashcards')
                ->onDelete('cascade');

            $table->foreign('section_id')
                ->references('id')->on('sections')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('flashcard_section', function (Blueprint $table) {
            $table->dropForeign(['flashcard_id']);
            $table->dropForeign(['section_id']);
        });
        
        Schema::dropIfExists('sections');
        Schema::dropIfExists('flashcard_section');
    }
}
