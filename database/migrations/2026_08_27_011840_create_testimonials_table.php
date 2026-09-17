<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');           // Who said it
            $table->string('event_type');             // Wedding, Corporate, etc.
            $table->text('quote');                    // The testimonial text
            $table->boolean('is_active')->default(true);  // Show/hide on landing page
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};