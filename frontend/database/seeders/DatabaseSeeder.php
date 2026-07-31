<?php

namespace Database\Seeders;

use App\Models\Faq;
use App\Models\Homepage;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Testimonial;
use App\Models\User;
use App\Models\WhyChooseUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'myth@mail.com',
            'password' => bcrypt('myth@123'),
            'is_admin' => true,
        ]);

        User::create([
            'name' => 'Admin User',
            'email' => 'admin@mail.com',
            'password' => bcrypt('admin@123'),
            'is_admin' => true,
        ]);

        Homepage::create([
            // Hero
            'hero_badge' => 'Welcome to Eleos Dental Clinic',
            'hero_title' => 'Gentle Dental Care For Every Smile',
            'hero_description' => 'We provide modern, comfortable and personalized dental care for children and adults. Our goal is to help every patient achieve a healthy smile in a relaxed and friendly environment.',
            // 'hero_image' => 'hero.jpg',

            // About
            'about_badge' => 'Meet Your Dentist',
            'about_title' => 'Dr. Malawmi',
            'about_description' => 'At Eleos Dental Clinic, our mission is to provide compassionate, honest and modern dental care for every patient. Whether its a routine checkup or a complex procedure, we believe everyone deserves gentle treatment in a comfortable environment.',
            // 'about_image' => 'about.jpg',

            // Services
            'services_badge' => 'Our Services',
            'services_title' => 'Complete Dental Care Under One Roof',
            'services_description' => 'From preventive care to advanced restorative treatments, we provide comprehensive dental services for patients of every age.',

            // Why Choose Us
            'why_choose_badge' => 'Why Choose Us',
            'why_choose_title' => 'Why Choose Eleos Dental Clinic',
            'why_choose_description' => 'We believe every patient deserves honest advice, gentle treatment, and modern dental care in a welcoming environment.',

            // Testimonials
            'testimonials_badge' => 'Patient Testimonials',
            'testimonials_title' => 'Smiles That Speak For Themselves',
            'testimonials_description' => 'We are grateful for the trust our patients place in us. Their experiences inspire us to continue providing compassionate and quality dental care every day.',

            // FAQ
            'faq_badge' => 'Frequently Asked Questions',
            'faq_title' => 'Have Questions?',
            'faq_description' => 'Find answers to common questions about appointments, consultations, and visiting our clinic.',

            // Gallery
            'gallery_badge' => 'Our Clinic',
            'gallery_title' => 'A Modern & Comfortable Environment',
            'gallery_description' => 'We believe a welcoming and hygienic environment helps every patient feel relaxed and confident throughout their visit.',
        ]);

        foreach (
            [
                ['title' => 'General Checkup', 'slug' => 'general-checkup', 'icon' => 'mdi-stethoscope', 'description' => 'Routine dental examinations to maintain healthy teeth and detect problems early.'],
                ['title' => 'Teeth Cleaning', 'slug' => 'teeth-cleaning', 'icon' => 'mdi-toothbrush', 'description' => 'Professional scaling and polishing to remove plaque and keep your smile fresh.'],
                ['title' => 'Dental Fillings', 'slug' => 'dental-fillings', 'icon' => 'mdi-tooth-outline', 'description' => 'Restore damaged or decayed teeth with durable and natural-looking fillings.'],
                ['title' => 'Tooth Extraction', 'slug' => 'tooth-extraction', 'icon' => 'mdi-medical-bag', 'description' => 'Safe and comfortable tooth removal with gentle aftercare guidance.'],
                ['title' => 'Root Canal', 'slug' => 'root-canal', 'icon' => 'mdi-hospital-box-outline', 'description' => 'Pain-relieving treatment to save infected teeth and restore oral health.'],
                ['title' => 'Crowns & Bridges', 'slug' => 'crowns-bridges', 'icon' => 'mdi-diamond-stone', 'description' => 'Restore missing or damaged teeth with strong and natural restorations.'],
                ['title' => 'Dentures', 'slug' => 'dentures', 'icon' => 'mdi-emoticon-happy-outline', 'description' => 'Comfortable full and partial dentures designed for confidence and function.'],
                ['title' => 'Teeth Whitening', 'slug' => 'teeth-whitening', 'icon' => 'mdi-white-balance-sunny', 'description' => 'Professional whitening treatment for a brighter and more confident smile.'],
            ] as $sortOrder => $service
        ) {
            Service::create([...$service, 'sort_order' => $sortOrder]);
        }

        foreach (
            [
                ['title' => 'Patient First Care', 'icon' => 'mdi-heart-pulse', 'description' => 'Every treatment begins with listening. We explain your options clearly, answer your questions, and help you make informed decisions without pressure.

     * Honest treatment recommendations
     * Comfortable and gentle procedures
     * Friendly support from consultation to recovery'],
                ['title' => 'Modern Dentistry', 'icon' => 'mdi-tooth-outline', 'description' => 'We use up-to-date techniques and equipment to provide accurate diagnosis and effective treatment.'],
                ['title' => 'Personalized Care', 'icon' => 'mdi-account-heart-outline', 'description' => 'Every treatment plan is tailored to your oral health, lifestyle and long-term wellbeing.'],
                ['title' => 'Safe & Hygienic', 'icon' => 'mdi-shield-check', 'description' => 'We maintain strict sterilization and hygiene protocols to ensure a safe clinical environment.'],
                ['title' => 'Flexible Appointments', 'icon' => 'mdi-clock-check-outline', 'description' => 'Book appointments that fit your schedule with minimal waiting time whenever possible.'],
            ] as $sortOrder => $items
        ) {
            WhyChooseUs::create([...$items, 'sort_order' => $sortOrder]);
        }

        foreach (
            [
                ['question' => 'Do I need an appointment before visiting?', 'answer' => 'Appointments are recommended to reduce waiting time and ensure we can give you the attention you deserve. Walk-in patients are welcome, subject to availability.'],
                ['question' => 'Do you provide treatment for children?', 'answer' => 'Yes. We provide gentle dental care for children and work to make every visit comfortable and stress-free.'],
                ['question' => 'What should I bring to my first appointment?', 'answer' => 'If available, bring any previous dental records, a list of medications you take, and any relevant medical information that may help us provide appropriate care.'],
                ['question' => 'Do you accept dental emergencies?', 'answer' => 'Yes. Please call us immediately if you are experiencing severe pain, swelling, bleeding, or a dental injury so we can arrange the earliest possible appointment.'],
                ['question' => 'How can I book an appointment?', 'answer' => 'You can book online through our appointment form or simply call our clinic and we will help you choose a convenient time.'],
            ] as $sortOrder => $faq
        ) {
            Faq::create([...$faq, 'sort_order' => $sortOrder]);
        }

        foreach (
            [
                ['patient_name' => 'R. Lalrinawmi', 'rating' => 5, 'review' => 'The doctor explained every step clearly and made me feel comfortable throughout my treatment. The clinic is clean, modern and welcoming.'],
                ['patient_name' => 'T. Chhangte', 'rating' => 5, 'review' => 'My children were nervous before their visit, but the staff made them feel relaxed and safe. We truly appreciate the kindness and patience shown during the appointment.'],
                ['patient_name' => 'L. Malsawmi', 'rating' => 4, 'review' => 'Booking an appointment was easy and the treatment was gentle. I would definitely recommend Eleos Dental Clinic to my friends and family.'],
            ] as $sortOrder => $testimonial
        ) {
            Testimonial::create([...$testimonial, 'sort_order' => $sortOrder]);
        }

        Setting::create([
            // Clinic
            'clinic_name' => 'Eleos Dental Clinic',
            'clinic_tagline' => 'Gentle Dental Care For Every Smile',
            // 'logo' => 'logo.png',
            // 'favicon' => 'favicon.ico',
            'happy_patient' => 500,
            'patient_rating' => 5,
            'clinic_description' => 'Providing compassionate, honest and modern dental care for individuals and families in Aizawl. We are committed to helping every patient achieve a healthy and confident smile.',


            // Doctor
            'doctor_name' => 'Dr. Malawmi',
            'doctor_qualification' => 'Bachelor of Dental Surgery',
            'doctor_specialization' => 'Orthodontist',
            'doctor_registration_number' => 'DENT123456',
            'doctor_experience' => 2,

            // Contact
            'phone' => '+91 87875 63733',
            'whatsapp' => '+91 87875 63733',
            'email' => 'eleos@dentalcare.mail',

            // Address
            'address' => 'Upper Republic Presbyterian Church Opp., Aizawl, Mizoram 796001',
            'google_maps_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.739661089914!2d92.7198327!3d23.720989199999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x374d95007a527a21%3A0x21639feb67e65c01!2sELEOS%20DENTAL%20CLINIC!5e0!3m2!1sen!2sin!4v1785392860656!5m2!1sen!2sin',

            // Clinic Hours
            'opening_hours' => [
                'Sunday-Friday' => '9:00am-6:00pm',
                'Saturday' => '',
            ],

            // Social
            'facebook_url' => 'https://facebook.com/eleos',
            'instagram_url' => 'https://www.instagram.com/eleosdentalclinic?igsh=Z2oxbmJ6Yjd1djNw',
            'youtube_url' => 'https://youtube.com/@eleos',
            'linkedin_url' => 'https://linkedin.com/company/eleos',

            // SEO
            'meta_title' => 'Eleos Dental Clinic',
            'meta_description' => 'Eleos Dental Clinic provides professional dental treatments including checkups, cleaning, fillings, root canal therapy, orthodontics, and cosmetic dentistry.',
        ]);
    }
}
