<?php

use Illuminate\Database\Seeder;

class StatuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert(
           [
                [
                    'name' => 'Ownerless',
                    'description' => 'Please Adopt me'
                ],
                [
                    'name' => 'Adopted',
                    'description' => "Thank's human! =^.^= "
                ]
           ]
        );
    }
}
