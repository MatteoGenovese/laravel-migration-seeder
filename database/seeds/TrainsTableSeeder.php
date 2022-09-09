<?php

use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        // $table->string('company');
        // $table->string('departure_station');
        // $table->string('arrival_station');
        // $table->date('departure_time');
        // $table->date('arrival_time');
        // $table->string('train_code');
        // $table->integer('number_of_carriages');
        // $table->boolean('is_in_time');
        // $table->boolean('is_deleted');

        $trains=[
            [
                'company' => "trenitalia",
                'departure_station' => "milazzo",
                'arrival_station' => "milano",
                'departure_time' => "10:00",
                'arrival_time' => "trenitalia",
                'train_code' => "trenitalia",
                'number_of_carriages' => "trenitalia",
                'is_in_time' => "trenitalia",
                'is_deleted' => "trenitalia",
            ],

        ]
    }
}
