<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    
    public function up() {
        Schema::table('vacancies', function (Blueprint $table) {
            $table->integer('sort_index')->after('expired')->nullable();
            $table->string('city', 100)->collation("utf8_general_ci")->after('sort_index')->nullable();
            $table->string('experience', 400)->collation("utf8_general_ci")->after('city')->nullable();
        });
    }

    public function down() {
        Schema::table('vacancies', function (Blueprint $table) {
            $table->dropColumn('sort_index');
            $table->dropColumn('city');
            $table->dropColumn('experience');
        });
    }
};
