<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::table('users_games', function (Blueprint $table) {
            $table->index("game_id", "users_games_game_id_index");
            $table->index("user_id", "users_games_user_id_index");
        });
    }

    public function down() {
        Schema::table('users_games', function (Blueprint $table) {
            $table->dropIndex("users_games_game_id_index");
            $table->dropIndex("users_games_user_id_index");
        });
    }
};
