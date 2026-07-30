<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        // Clinic
        'clinic_name',
        'clinic_tagline',
        'logo',
        'favicon',
        'happy_patient',
        'patient_rating',
        ' clinic_description',

        // Doctor
        'doctor_name',
        'doctor_qualification',
        'doctor_specialization',
        'doctor_registration_number',
        'doctor_experience',

        // Contact
        'phone',
        'whatsapp',
        'email',

        // Address
        'address',
        'google_maps_url',

        // Clinic Hours
        'opening_hours',

        // Social
        'facebook_url',
        'instagram_url',
        'youtube_url',
        'linkedin_url',

        // SEO
        'meta_title',
        'meta_description',
    ];

    protected function casts(): array
    {
        return [
            'opening_hours' => 'array',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }

    public static function current(): self
    {
        return static::firstOrCreate([]);
    }
}
