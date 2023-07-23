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
        Schema::create('company_information', function (Blueprint $table) {
            $table->id();
            $table->text('header_text');
            $table->text('about_company_introduction');
            $table->longText('about_company_details');
            $table->text('service_introduction');
            $table->text('course_introduction');
            $table->text('project_introduction');
            $table->text('team_introduction');
            $table->text('contact_introduction');
            $table->string('address');
            $table->string('phone');
            $table->string('gmail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_information');
    }
};
