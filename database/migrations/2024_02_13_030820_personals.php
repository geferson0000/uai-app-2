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
        Schema::create('personals', function(Blueprint $table)
        {
            $table->id();
            $table->string('firstName');
            $table->string('secondName')->nullable();
            $table->string('firstSurname');
            $table->string('secondSurname')->nullable();
            $table->string('gmail')->nullable();
            $table->string('email-cantv')->nullable();
            $table->string('phone')->nullable();
            $table->binary('profile-photo')->nullable();
            $table->integer('P00')->unique();
            $table->integer('personalID')->unique();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();


            $table->unsignedBigInteger('job_titles_id');
            $table->foreign('job_titles_id')->references('id')->on('job_titles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('personals');
    }
};
