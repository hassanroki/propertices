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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('p_name');
            $table->string('land_area')->nullable();
            $table->string('project_face')->nullable();
            $table->string('b_height')->nullable();
            $table->integer('num_flat')->nullable();
            $table->string('flat_size')->nullable();
            $table->integer('each_floor')->nullable();
            $table->string('address')->nullable();
            $table->string('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
