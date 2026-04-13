<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Group;

class GroupUserSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::where('email', 'test@example.com')->first();

        if ($user) {
            $group = Group::create(['name' => 'Family']);

            $user->groups()->attach($group->id);
        }
    }
}