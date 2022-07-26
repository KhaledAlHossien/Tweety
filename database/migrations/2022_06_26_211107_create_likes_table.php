<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId('user_id')
                ->constrained()
                ->onDelete('cascade');
            $table
                ->foreignId('tweet_id');

            $table->boolean('liked');
            $table->timestamps();

             $table->foreign('tweet_id')
                 ->references('id')
                 ->on("tweets")
                 ->onDelete('cascade');

            $table->unique(['user_id', 'tweet_id']);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('likes');
    }
};
