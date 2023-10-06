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
            'picture' => 'images/tour_events/01.png' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,
            'slug' => 'lorem-lpsum-1'
         ]);

         TourEvents::create([
            'title' => 'Tour Event 2',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => 'images/tour_events/02.png' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,
            'slug' => 'lorem-lpsum-2'
         ]);

         // TourEvents::create([
         //    'title' => 'Tour Event 3',
         //    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //    'picture' => 'images/tour_events/03.png' ,
         //    'status' => 'Draft' ,
         //    'user_id' => '1' ,
         //    'slug' => 'lorem-lpsum-3'
         // ]);

         // TourEvents::create([
         //    'title' => 'Tour Event 4',
         //    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //    'picture' => 'images/tour_events/04.png' ,
         //    'status' => 'Draft' ,
         //    'user_id' => '1' ,
         //    'slug' => 'lorem-lpsum-4'
         // ]);
         // TourEvents::create([
         //     'title' => 'Tour Event 5',
         //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //     'picture' => 'images/tour_events/01.png' ,
         //     'status' => 'Publish' ,
         //     'user_id' => '1' ,
         //     'slug' => 'lorem-lpsum-5'
         //  ]);
 
         //  TourEvents::create([
         //     'title' => 'Tour Event 6',
         //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //     'picture' => 'images/tour_events/02.png' ,
         //     'status' => 'Publish' ,
         //     'user_id' => '1' ,
         //     'slug' => 'lorem-lpsum-6'
         //  ]);
 
         //  TourEvents::create([
         //     'title' => 'Tour Event 7',
         //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //     'picture' => 'images/tour_events/03.png' ,
         //     'status' => 'Publish' ,
         //     'user_id' => '1' ,
         //     'slug' => 'lorem-lpsum-7'
         //  ]);
 
         //  TourEvents::create([
         //     'title' => 'Tour Event 8',
         //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //     'picture' => 'images/tour_events/04.png' ,
         //     'status' => 'Publish' ,
         //     'user_id' => '1' ,
         //     'slug' => 'lorem-lpsum-8'
         //  ]);
 
         //  TourEvents::create([
         //     'title' => 'Tour Event 9',
         //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //     'picture' => 'images/tour_events/01.png' ,
         //     'status' => 'Publish' ,
         //     'user_id' => '1' ,
         //     'slug' => 'lorem-lpsum-9'
         //  ]);
 
         //  TourEvents::create([
         //     'title' => 'Tour Event 10',
         //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //     'picture' => 'images/tour_events/02.png' ,
         //     'status' => 'Draft' ,
         //     'user_id' => '1' ,
         //     'slug' => 'lorem-lpsum-10'
         //  ]);
 
         //  TourEvents::create([
         //     'title' => 'Tour Event 11',
         //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //     'picture' => 'images/tour_events/03.png' ,
         //     'status' => 'Draft' ,
         //     'user_id' => '1' ,
         //     'slug' => 'lorem-lpsum-11'
         //  ]);

    }
}
