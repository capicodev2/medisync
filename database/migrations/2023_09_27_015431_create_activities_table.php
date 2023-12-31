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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('id_patient');
            $table->string('patient');
            $table->string('name_activity');
            $table->string('min_permissions');
            $table->string('temporality');
            $table->string('schedule');
            $table->string('medicine_id');
            $table->string('dose');
            $table->string('via');
            $table->date('create_date');
            $table->date('suspension_date');
            $table->string('observations');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
