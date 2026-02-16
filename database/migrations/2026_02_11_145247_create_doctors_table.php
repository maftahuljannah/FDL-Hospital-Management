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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id()->unique();
            $table->timestamps();
            $table->string('title');
            $table->string('name');
            $table->string('designation');
            $table->text('description')->nullable();
            $table->string('gender');
            $table->boolean('status')->default(true);
            $table->time('availability_time');
            $table->date('joining_date');
            $table->string('profile_image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
