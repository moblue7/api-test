<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::create([
             'name' => 'test',
             'email' => 'mohammmad@gmail.com',
             'email_verified_at' => now(),
             'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
             'remember_token' => 'test_token',
             'api_token' =>  '388wfNlLYLv2J8WxqP4qbAghQIpMeHqlkbVgTs0BbIcbpVMxi0f8BnBowmGR',
         ]);
    }
}
