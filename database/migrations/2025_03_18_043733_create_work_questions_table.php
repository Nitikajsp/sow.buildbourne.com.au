<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkQuestionsTable extends Migration
{
    public function up()
    {
        Schema::create('work_questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('workgroup_id');
            $table->string('question_title', 255);
            $table->text('question_value')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();

            $table->foreign('workgroup_id')->references('id')->on('workgroups')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('work_questions');
    }
};
