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
        Schema::create('hires', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('HirerID');
            $table->unsignedBigInteger('HiredID');
            $table->unsignedBigInteger('JobID');
            $table->foreign('HirerID')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('HiredID')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('JobID')->references('id')->on('jobs')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hires');
    }
};
