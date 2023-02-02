<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    
    public function up() {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->string("title", 200)->collation("utf8_general_ci")->nullable();
            $table->string("type", 45)->collation("utf8_general_ci")->nullable();
            $table->string("description", 2000)->collation("utf8_general_ci")->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->tinyInteger("expired")->default(0);
        });
    }

    public function down() {
        Schema::dropIfExists('vacancies');
    }
};
