<?php

use App\Train;
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
                'departure_time' => '2023/09/09 21:00',
                'arrival_time' => '2023/09/09 23:00',
                'train_code' => "ad345",
                'number_of_carriages' => 13,
                'is_in_time' => true,
                'is_deleted' => true,
            ],
            [
                'company' => "trenitalia",
                'departure_station' => "milazzo",
                'arrival_station' => "milano",
                'departure_time' => '2022/09/09 21:00',
                'arrival_time' => '2022/09/09 23:00',
                'train_code' => "ad345",
                'number_of_carriages' => 13,
                'is_in_time' => true,
                'is_deleted' => true,
            ],
            [
                'company' => "trenitalia",
                'departure_station' => "milazzo",
                'arrival_station' => "milano",
                'departure_time' => '2021/09/09 21:00',
                'arrival_time' => '2021/09/09 23:00',
                'train_code' => "ad345",
                'number_of_carriages' => 13,
                'is_in_time' => true,
                'is_deleted' => true,
            ],
            [
                'company' => "trenitalia",
                'departure_station' => "milazzo",
                'arrival_station' => "milano",
                'departure_time' => '2020/09/09 21:00',
                'arrival_time' => '2020/09/09 23:00',
                'train_code' => "ad345",
                'number_of_carriages' => 13,
                'is_in_time' => true,
                'is_deleted' => true,
            ],
        ];

        foreach($trains as $train){
            $newTrain = new Train();
            $newTrain->company = $train['company'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arrival_station = $train['arrival_station'];
            $newTrain->departure_time = $train['departure_time'];
            $newTrain->arrival_time = $train['arrival_time'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->number_of_carriages = $train['number_of_carriages'];
            $newTrain->is_in_time = $train['is_in_time'];
            $newTrain->is_deleted = $train['is_deleted'];
            $newTrain->save();
        }


    }
}
