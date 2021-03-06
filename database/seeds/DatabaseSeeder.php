<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(StatuTableSeeder::class);
        $this->call(TypeTableSeeder::class);
        $this->call(ShelterTableSeeder::class);
        $this->call(AnimalTableSeeder::class);
    }
}
