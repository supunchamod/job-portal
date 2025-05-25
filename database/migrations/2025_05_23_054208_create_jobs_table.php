<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            
            // Description fields
            $table->text('short_description'); // Added short description
            $table->text('description');
            $table->text('requirements'); // Added requirements
            
            // Relationships
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->foreignId('company_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null'); // Added job poster
            
            // Location details
            $table->string('location');
            $table->enum('job_place', ['remote', 'on-site', 'hybrid'])->default('on-site'); // Added job place
            
            // Salary information
            $table->decimal('salary', 10, 2)->nullable();
            $table->string('salary_currency', 3)->default('USD'); // Added currency
            $table->enum('salary_period', ['hourly', 'daily', 'weekly', 'monthly', 'yearly'])->default('monthly'); // Added period
            
            // Job type
            $table->enum('type', ['full-time', 'part-time', 'contract', 'freelance', 'internship']);
            
            // Status flags (using boolean for checkbox options)
            $table->boolean('is_featured')->default(false); // Featured tag (checkbox)
            $table->boolean('is_urgent')->default(false); // Urgent tag (checkbox)
            $table->boolean('is_active')->default(true); // Active/inactive (1/0)
            
            // Application details
            $table->date('deadline');
            $table->string('application_url')->nullable();
            
            // Timestamps
            $table->timestamps();
            $table->softDeletes(); // Added soft deletes
            
            // Indexes for better performance
            $table->index('is_featured');
            $table->index('is_urgent');
            $table->index('is_active');
            $table->index('deadline');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
};
