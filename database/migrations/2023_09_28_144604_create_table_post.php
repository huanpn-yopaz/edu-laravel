<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('post', function (Blueprint $table) {
            $table->id('id_post');
           $table->string('name_post');
           $table->string('img_post',30);
           $table->text('video_post');
           $table->string('name_teacher',40);
           $table->string('img_teacher',30);
           $table->date('date_post');
           $table->integer('id_object');
           $table->integer('id_zoom');
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post');
    }
};
