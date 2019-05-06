<?php

use Illuminate\Database\Seeder;

class AnimalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animals')->insert(
            [
                [
                    'name' => 'Max',
                    'age' => '7',
                    'description' => 'Fluffy golden retriever',
                    'status_id' => '1',
                    'types_id' => '1',
                    'shelters_id' => '1',
                ],
                [
                    'name' => 'Lucifer',
                    'age' => '3',
                    'description' => 'Cat of Cinderella',
                    'status_id' => '1',
                    'types_id' => '2',
                    'shelters_id' => '2',
                ]
            ]
        );
    }
}
