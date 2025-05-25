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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('logo')->nullable();
            $table->string('website')->nullable();
            $table->string('email')->unique();
            
            // New fields you requested
            $table->string('location');
            $table->string('company_size'); // e.g. "1000-1500 employees"
            $table->string('established'); // e.g. "Oct 2010"
            
            $table->timestamps();
            $table->softDeletes(); // Added soft delete support
        });

        // Create services table if it doesn't exist
        if (!Schema::hasTable('services')) {
            Schema::create('services', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('slug')->unique();
                $table->timestamps();
            });
        }

        // Create company_service pivot table if it doesn't exist
        if (!Schema::hasTable('company_service')) {
            Schema::create('company_service', function (Blueprint $table) {
                $table->foreignId('company_id')->constrained()->onDelete('cascade');
                $table->foreignId('service_id')->constrained()->onDelete('cascade');
                $table->primary(['company_id', 'service_id']);
            });
        }

        Schema::table('companies', function (Blueprint $table) {
            $table->string('logo')->default('assets/img/l-1.png')->after('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
};
