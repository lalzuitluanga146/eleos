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
        Schema::create('homepages', function (Blueprint $table) {
            $table->id();
            /*
            |--------------------------------------------------------------------------
            | Hero
            |--------------------------------------------------------------------------
            */
            $table->string('hero_badge')->nullable();
            $table->string('hero_title')->nullable();
            $table->text('hero_description')->nullable();
            $table->string('hero_image')->nullable();

            /*
            |--------------------------------------------------------------------------
            | About
            |--------------------------------------------------------------------------
            */
            $table->string('about_badge')->nullable();
            $table->string('about_title')->nullable();
            $table->text('about_description')->nullable();
            $table->string('about_image')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Services
            |--------------------------------------------------------------------------
            */
            $table->string('services_badge')->nullable();
            $table->string('services_title')->nullable();
            $table->text('services_description')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Why Choose Us
            |--------------------------------------------------------------------------
            */
            $table->string('why_choose_badge')->nullable();
            $table->string('why_choose_title')->nullable();
            $table->text('why_choose_description')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Testimonials
            |--------------------------------------------------------------------------
            */
            $table->string('testimonials_badge')->nullable();
            $table->string('testimonials_title')->nullable();
            $table->text('testimonials_description')->nullable();

            /*
            |--------------------------------------------------------------------------
            | FAQ
            |--------------------------------------------------------------------------
            */
            $table->string('faq_badge')->nullable();
            $table->string('faq_title')->nullable();
            $table->text('faq_description')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Gallery
            |--------------------------------------------------------------------------
            */
            $table->string('gallery_badge')->nullable();
            $table->string('gallery_title')->nullable();
            $table->text('gallery_description')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homepages');
    }
};
