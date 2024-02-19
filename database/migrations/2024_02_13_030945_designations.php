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
        Schema::create('designations', function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('personals_id');
            $table->foreign('personals_id')->references('id')->on('personals');
            $table->unsignedBigInteger('actions_id');
            $table->foreign('actions_id')->references('id')->on('actions');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('designations');
    }
};
