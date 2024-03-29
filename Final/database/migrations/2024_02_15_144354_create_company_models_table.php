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
        Schema::create('company_models', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('CompanyName');
            $table->string('CompanyWeb');
            $table->string('Location');
            $table->string('Logo');
            $table->string('Wallpaper');
            $table->string('Gallery');
            $table->text('Definition');
            $table->text('LongDefinition');
            $table->string('Website');
            $table->string('Linkedin');
            $table->string('Twitter');
            $table->string('Facebook');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_models');
    }
};
