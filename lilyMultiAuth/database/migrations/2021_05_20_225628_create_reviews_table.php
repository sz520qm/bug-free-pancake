<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
           
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->integer('room');
            $table->integer('bathroom');
            $table->integer('bedroom');
            $table->integer('livingroom');
            $table->integer('kitchen');
            $table->json('flunks')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
