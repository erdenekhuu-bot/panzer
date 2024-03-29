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
        Schema::create('profile_models', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('fullName');
            $table->string('Image');
            $table->string('headLine');
            $table->string('dropDown');
            $table->string('unknown');
            $table->mediumText('textArea');
            $table->string('website');
            $table->string('linkedin');
            $table->string('twitter');
            $table->string('facebook');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_models');
    }
};
