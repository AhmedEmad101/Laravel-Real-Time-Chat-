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
        Schema::create('education', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('ProfileID');
            $table->string('ColledgeName');
            $table->string('StartingYear');
            $table->string('EndingYear');
            $table->foreign('ProfileID')->references('id')->on('profiles')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
