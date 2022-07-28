<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Berita;
use App\Models\Jabatan;
use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            'role' => 1,
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

        Berita::factory(10)->create();

        Jabatan::create([
            'nama' => 'Geuchik'
        ]);

        Jabatan::create([
            'nama' => 'Sekretaris Desa'
        ]);

        Jabatan::create([
            'nama' => 'Bendahara Desa'
        ]);

        Jabatan::create([
            'nama' => 'Tuha 4'
        ]);
    }
}
