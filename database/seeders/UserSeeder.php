<?php

namespace Database\Seeders;

use App\Models\agenda;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'admin@gmail.com',
            'password' => bcrypt('1234'),
            'role' => 'admin',
        ]);

        // User::create([
            
        //     'email' => 'hidayat@gmail.com',
        //     'password' => bcrypt('password'),
        //     'role' => 'masyarakat',
        // ]);
        // agenda::create([

        // ])
    }
}
