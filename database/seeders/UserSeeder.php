<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserRoles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(['email' => 'admin@mail.ru'],['full_name' => 'Admin Admin Admin', 'password' => 'admin', 'id_user_role' => UserRoles::first()->where('role', 'admin')->value('id')]);
        User::updateOrCreate(['email' => 'user@mail.ru'], ['full_name' => 'User User User', 'password' => 'user', 'id_user_role' => UserRoles::first()->where('role', 'user')->value('id')]);
    }
}
