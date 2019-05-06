<?php

use Illuminate\Database\Seeder;

class ShelterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shelters')->insert(
            [
                [
                    'name' => 'St Francis',
                    'description' => 'St Francis shelter for abandoned animals',
                    'cnpj' => '12739888000168'
                ],
                [
                    'name' => 'Heaven of Pets',
                    'description' => 'The heaven for pets',
                    'cnpj' => '41284661000173'
                ]
            ]
        );
    }
}
