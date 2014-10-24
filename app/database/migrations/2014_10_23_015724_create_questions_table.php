<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    public function up()
    {
        Schema::create('questions', function(Blueprint $table)
        {
            $table->increments('ID')->index();
            $table->string('TITLE', 100);
            $table->string('AUTHOR', 100);
            $table->string('DESCRIPTION', 100);
            $table->timestamp('STARTDATE');
            $table->timestamp('ENDDATE');
            $table->integer('STATUS');
            $table->string('QUESTIONID', 100);
        });
    }

    public function down()
    {
        Schema::drop('questions');
    }

}
