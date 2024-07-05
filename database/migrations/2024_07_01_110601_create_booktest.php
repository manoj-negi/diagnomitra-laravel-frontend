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
        Schema::create('booktest', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('full_name'); // Full Name
  
            $table->string('email')->unique(); // Email
      
            $table->string('mobile_number'); // Mobile Number
        
            $table->string('location'); // Your Location
 
            $table->string('prescription')->nullable(); // Upload Prescription
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booktest');
    }
};
