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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            /*
            |--------------------------------------------------------------------------
            | Clinic Information
            |--------------------------------------------------------------------------
            */
            $table->string('clinic_name')->nullable();
            $table->string('clinic_tagline')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('happy_patient')->nullable();
            $table->string('patient_rating')->nullable();
            $table->text('clinic_description')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Doctor Information
            |--------------------------------------------------------------------------
            */
            $table->string('doctor_name')->nullable();
            $table->string('doctor_qualification')->nullable();
            $table->string('doctor_specialization')->nullable();
            $table->string('doctor_registration_number')->nullable();
            $table->string('doctor_experience')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Contact
            |--------------------------------------------------------------------------
            */
            $table->string('phone')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('email')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Address
            |--------------------------------------------------------------------------
            */
            $table->text('address')->nullable();
            $table->text('google_maps_url')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Clinic Hours
            |--------------------------------------------------------------------------
            */
            $table->text('opening_hours')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Social Media
            |--------------------------------------------------------------------------
            */
            $table->string('facebook_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('youtube_url')->nullable();
            $table->string('linkedin_url')->nullable();

            /*
            |--------------------------------------------------------------------------
            | SEO
            |--------------------------------------------------------------------------
            */
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
