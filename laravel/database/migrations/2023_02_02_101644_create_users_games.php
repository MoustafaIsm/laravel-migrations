<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create('users_games', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('game_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->primary(['user_id', 'game_id']);
        });
    }

    public function down() {
        Schema::dropIfExists('users_games');
    }
};
