<?php

use Illuminate\Database\Seeder;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert(
            [
                [
                    'name' => 'Dog',
                    'description' => "The best man's friend"
                ],
                [
                    'name' => 'Cat',
                    'description' => 'A mix of lazy and a little evil'
                ],
                [
                    'name' => 'Horse',
                    'description' => "It's a little peculiar, but who i am to judge"
                ],
                [
                    'name' => 'Bird',
                    'description' => 'I thought I saw a pussy cat'
                ],
                [
                    'name' => 'Fish',
                    'description' => 'glub glub'
                ],
                [
                    'name' => 'Snake',
                    'description' => 'Little sneaky but a long size friend'
                ]
            ]
        );
    }
}
