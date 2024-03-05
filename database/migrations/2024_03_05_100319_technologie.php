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

        Schema::create('technologie', function (Blueprint $table){

        $table->id();
            $table->timestamps();
            $table->string('titre');
            $table->string('machine_fr');
            $table->string('machine_en');
            $table->text('description_machine_fr'); 
            $table->text('description_machine_en');
        })
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
