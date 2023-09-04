<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TourDestinations;

class TourDestinationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TourDestinations::create([
            'title' => 'Scuba Diving and Snorkeling',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => '01.png' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,
            'slug_tour_destination' => 'lorem-lpsum-1'
         ]);

         TourDestinations::create([
            'title' => 'Scuba Diving and Snorkeling',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => '01.png' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,
            'slug_tour_destination' => 'lorem-lpsum-2'
         ]);
    }
}
