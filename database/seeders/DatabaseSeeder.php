<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            
            'username'=>'admin',
            'password'=>bcrypt('admin123'),
            'is_dokter'=>'1',
            'is_farmasi'=>'1',
            'is_pendaftaran'=>'1'
    ]);
    }
}
