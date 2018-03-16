<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommitmentFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commitment_files', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('commitment_id')->unsigned();
            $table->string('title');
            $table->text('description');
            $table->string('path');
            $table->timestamps();

            $table
                ->foreign('commitment_id')
                ->references('id')->on('commitments')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commitment_files');
    }
}
