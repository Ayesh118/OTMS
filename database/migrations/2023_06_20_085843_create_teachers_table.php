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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_category');
            $table->string('teacher_name');
            $table->string('teacher_email');
            $table->string('teacher_password');
            $table->integer('teacher_mobile');
            $table->text('teacher_address');
            $table->integer('teacher_nid');
            $table->string('teacher_bloodGroup');
            $table->date('teacher_dob');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
