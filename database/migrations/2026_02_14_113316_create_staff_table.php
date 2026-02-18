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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('department_id')->nullable();
            $table->string('photo')->nullable();
            $table->string('name');
            $table->string('employee_id')->unique()->nullable();
            $table->string('designation');
            $table->string('shift');
            $table->string('nid')->unique()->nullable();
            $table->string('blood_group')->nullable();
            $table->text('description')->nullable();
            $table->string('address')->nullable();
            $table->string('phone');
            $table->string('emergency_contact')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
