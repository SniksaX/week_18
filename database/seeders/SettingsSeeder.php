<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Setting;

class SettingsSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::where('email', 'test@example.com')->first();

        $user->setting()->create([
            'theme' => 'dark',
            'lang'  => 'fr'
        ]);
    }
};