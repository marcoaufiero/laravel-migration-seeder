<?php

use App\Models\Train;
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
        $trains = [
            [
                'departure' => 'Milano',
                'arrival' => 'Roma',
                'departure_time' => '13:20',
                'arrival_time' => '16:30',
                'ticket_price' => '€19,90',
            ]
        ];

        foreach($trains as $elem){
            $newTrain = new Train();
            $newTrain->departure = $elem['departure'];
            $newTrain->arrival = $elem['arrival'];
            $newTrain->departure_time = $elem['departure_time'];
            $newTrain->arrival_time = $elem['arrival_time'];
            $newTrain->ticket_price = $elem['ticket_price'];
            $newTrain->save();
        }

    }
}
