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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('course_id')->unsigned();
            $table->bigInteger('toplist_id')->unsigned();
            $table->bigInteger('lecturer_id')->unsigned();
            $table->string('title');
            $table->string('subtitle');
            // $table->string('semester');
            // $table->string('academic_year');
            // $table->integer('credit');
            // $table->string('code');
            $table->string('time');
            $table->string('field');
            $table->text('description');
            $table->string('image');
            $table->foreign('lecturer_id', 'lecturerid_foreign')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
