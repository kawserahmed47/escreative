<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title');
            $table->longText('description');
            $table->integer('project_category');
            $table->text('client_feedback')->nullable();
            $table->string('client_name');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('budget');
            $table->longText('image');
            $table->boolean('status')->default(true)->comment("1=>Publish, 0=>Unpublish")->nullable();
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
        Schema::dropIfExists('projects');
    }
}
