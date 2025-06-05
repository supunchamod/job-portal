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
    public function up(): void
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->string('phone')->nullable()->after('email');
            $table->string('facebook_link')->nullable()->after('website');
            $table->string('linkedin_link')->nullable()->after('facebook_link');
        });
    }

    public function down(): void
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->dropColumn(['phone', 'facebook_link', 'linkedin_link']);
        });
    }
};
