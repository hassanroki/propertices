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
        Schema::create('contact_phones', function (Blueprint $table) {
            $table->id();
            $table->string('phone_num_one');
            $table->string('phone_num_two')->nullable();
            $table->string('phone_num_icon')->nullable();
            $table->string('email');
            $table->string('email_icon')->nullable();
            $table->string('website_link')->nullable();
            $table->string('address_one');
            $table->string('address_two')->nullable();
            $table->string('address_icon')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_phones');
    }
};
