<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->string('subject');
            $table->longText('message')->nullable();
            $table->boolean('quotation')->default(false)->comment('0=>Unchecked, 1=>Checked')->nullable();
            $table->boolean('visit')->default(false)->comment('0=>Unchecked, 1=>Checked')->nullable();
            $table->boolean('diagnosis')->default(false)->comment('0=>Unchecked, 1=>Checked')->nullable();
            $table->boolean('consultation')->default(false)->comment('0=>Unchecked, 1=>Checked')->nullable();
            $table->integer('status')->default(1)->comment('0=>Unpublished, 1=>Published');
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
        Schema::dropIfExists('quotations');
    }
}
