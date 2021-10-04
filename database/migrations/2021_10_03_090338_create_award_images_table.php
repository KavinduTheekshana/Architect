<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAwardImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('award_images', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->bigInteger('award_id')->unsigned();
            $table->timestamps();
            $table->foreign('award_id')->references('id')->on('awards')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('award_images');
    }
}
