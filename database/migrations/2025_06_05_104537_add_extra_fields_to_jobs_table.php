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
        Schema::table('jobs', function (Blueprint $table) {
            // Example: Add new columns
            $table->string('job_level')->nullable()->after('type');
            $table->string('experience')->nullable()->after('job_level');
            $table->string('qualification')->nullable()->after('experience');
            $table->string('gender')->nullable()->after('qualification');
            $table->decimal('min_salary', 10, 2)->nullable()->after('salary');
            $table->decimal('max_salary', 10, 2)->nullable()->after('min_salary');
            $table->string('job_fee_type')->nullable()->after('application_url');
            $table->text('skills')->nullable()->after('job_fee_type');
            $table->string('permanent_address')->nullable()->after('skills');
        });
    }

    public function down()
    {
        Schema::table('jobs', function (Blueprint $table) {
            // Drop the added columns if rollback
            $table->dropColumn([
                'job_level', 'experience', 'qualification', 'gender',
                'min_salary', 'max_salary', 'job_fee_type', 'skills',
                'permanent_address'
            ]);
        });
    }
};
