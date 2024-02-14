<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MoveQuizDescriptionToDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('course_quizzes', function (Blueprint $table) {
            $table->dropColumn('description');
        });

        Schema::table('quiz_details', function (Blueprint $table) {
            $table->string('description')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('course_quizzes', function (Blueprint $table) {
            $table->string('description');
        });

        Schema::table('quiz_details', function (Blueprint $table) {
            $table->dropColumn('description');
        });
    }
}
