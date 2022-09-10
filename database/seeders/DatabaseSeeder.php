<?php

namespace Database\Seeders;

// use App\Models\proyek;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(5)->create();
        // proyek::factory(5)->create();

        // User::create([
        //     'name' => 'hidayat',
        //     'email' => 'hidayat@gmail.com',
        //     'password' => bcrypt('qwerty')
        // ]);

        $this->call([
            UserSeeder::class,
        ]);
    }
}
