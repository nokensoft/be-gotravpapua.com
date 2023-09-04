<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TourEvents;

class TourEventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TourEvents::create([
            'title' => 'Lake Sentani Festival, 2024',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => '01.png' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,
            'slug_tour_event' => 'lorem-lpsum-1'
         ]);


         TourEvents::create([
            'title' => 'Biak Munara Wampasi, 2024',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => '02.png' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,
            'slug_tour_event' => 'lorem-lpsum-2'
         ]);


         TourEvents::create([
            'title' => 'Baliem Valley Festival, 2024',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => '03.png' ,
            'status' => 'Draft' ,
            'user_id' => '1' ,
            'slug_tour_event' => 'lorem-lpsum-3'
         ]);


    }
}