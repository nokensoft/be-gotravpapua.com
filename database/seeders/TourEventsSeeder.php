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
            'title' => 'Tour Event 1',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => '01.png' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,
            'slug' => 'lorem-lpsum-1'
         ]);


         TourEvents::create([
            'title' => 'Tour Event 2',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => '02.png' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,
            'slug' => 'lorem-lpsum-2'
         ]);


         TourEvents::create([
            'title' => 'Tour Event 3',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => '03.png' ,
            'status' => 'Draft' ,
            'user_id' => '1' ,
            'slug' => 'lorem-lpsum-3'
         ]);


    }
}
