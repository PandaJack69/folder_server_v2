<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('emails', function (Blueprint $table) {
            $table->id();
            $table->string('to_email');
            $table->string('from_email')->default('admin@artan.khufra.my.id');
            $table->string('subject');
            $table->text('message')->nullable();
            $table->enum('status', ['sent', 'failed', 'delivered', 'bounced'])->default('sent');
            $table->text('error_message')->nullable(); // Store specific error details if failed
            $table->timestamps();
            
            // Optional: Index for better performance on frequent queries
            $table->index(['to_email', 'status']);
            $table->index('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('emails');
    }
};