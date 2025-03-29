<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Pegawai;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Delas',
            'email' => 'Delas@example.com',
        ]);
        Pegawai::insert([
            [
                'name' => 'Wildan',
                'nip' => '1234',
            ],
            [
                'name' => 'Delas',
                'nip' => '1235',
            ]
        ]);
        
    }
}
