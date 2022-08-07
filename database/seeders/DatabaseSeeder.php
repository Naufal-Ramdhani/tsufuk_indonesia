<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;
use App\Models\Lanah;
use App\Models\LanahDetail;
use App\Models\Pelatih;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // ================= Role =====================
        Role::create([
            'name' => 'pelatih',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'anggota',
            'guard_name' => 'web'
        ]);

        // ================== Lanah =====================
        Lanah::create([
            'nama' => 'Bima',
            'alamat' => 'Cirebon'
        ]);

        Lanah::create([
            'nama' => 'Telkom',
            'alamat' => 'Bandung'
        ]);

        // ================== User =====================
        // \App\Models\User::factory(10)->create();
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => bcrypt('1234567'),
        ]);

        $admin->assignRole('admin');

        $pelatih = User::create([
            'name' => 'Pelatih',
            'email' => 'pelatih@test.com',
            'password' => bcrypt('1234567'),
        ]);

        $pelatih->assignRole('pelatih');

        $anggota = User::create([
            'name' => 'Anggota',
            'email' => 'anggota@test.com',
            'password' => bcrypt('1234567'),
        ]);

        $anggota->assignRole('anggota');

        LanahDetail::create([
            'lanah_id' => '1',
            'pelatih_id' => '1'
        ]);

        Pelatih::create([
            'user_id' => '2',
            
        ]);
    }
}
