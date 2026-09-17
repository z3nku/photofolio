<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Admin user
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'is_admin' => true,
        ]);

        // Sample testimonials
        Testimonial::create([
            'client_name' => 'Sarah & Mike',
            'event_type' => 'Wedding, 2024',
            'quote' => 'Absolutely unreal. Every photo felt like it was ripped from a magazine.',
            'is_active' => true,
        ]);

        Testimonial::create([
            'client_name' => 'Jordan',
            'event_type' => 'Corporate Event, 2024',
            'quote' => 'The video had us in tears. He captured moments we didn\'t even know happened.',
            'is_active' => true,
        ]);

        Testimonial::create([
            'client_name' => 'Priya & Alex',
            'event_type' => 'Engagement, 2024',
            'quote' => 'Booked him for our engagement shoot and immediately rebooked for the wedding.',
            'is_active' => true,
        ]);
    }
}