<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    protected $fillable = [
        // Hero
        'hero_badge',
        'hero_title',
        'hero_description',
        'hero_image',

        // About
        'about_badge',
        'about_title',
        'about_description',
        'about_image',

        // Services
        'services_badge',
        'services_title',
        'services_description',

        // Why Choose Us
        'why_choose_badge',
        'why_choose_title',
        'why_choose_description',

        // Testimonials
        'testimonials_badge',
        'testimonials_title',
        'testimonials_description',

        // FAQ
        'faq_badge',
        'faq_title',
        'faq_description',

        // Gallery
        'gallery_badge',
        'gallery_title',
        'gallery_description',
    ];

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }

    public static function current(): self
    {
        return static::firstOrCreate([]);
    }
}
