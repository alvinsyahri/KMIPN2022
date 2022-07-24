<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'nama' => 'Administrator',
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'alamat' => fake()->city(),
            'no_hp' => fake()->unique()->numerify('852########'),
            'is_admin' => 1,
        ]);

        User::factory(10)->create();

        Kategori::create([
            'nama' => 'Sosial',
            'slug' => 'sosial'
        ]);
        
        Kategori::create([
            'nama' => 'Pengumuman',
            'slug' => 'pengumuman'
        ]);
    }
}
