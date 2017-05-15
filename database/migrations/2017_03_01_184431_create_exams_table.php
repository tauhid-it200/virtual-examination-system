<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject');
            $table->string('exam_title');
            $table->string('exam_code')->unique();
            $table->text('exam_description');
            $table->integer('total_questions');
            $table->integer('duration');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->tinyInteger('publication_status')->default(0);
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
        Schema::dropIfExists('exams');
    }
}
