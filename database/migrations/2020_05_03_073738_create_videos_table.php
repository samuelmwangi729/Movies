<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('VideoTitle');
            $table->string('VideoSlug') ;
            $table->longText('VideoCategory');
            $table->longText('VideoDescription');
            $table->string('VideoPoster');
            $table->string('VideoFile');
            $table->integer('Views')->default(0);
            $table->integer('Likes')->default(0);
            $table->integer('Subscibers')->default(0);
            $table->string('PostedBy');
            $table->integer('Status')->default(0);
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
        Schema::dropIfExists('videos');
    }
}
