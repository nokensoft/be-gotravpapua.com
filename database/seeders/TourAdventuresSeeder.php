<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TourAdventures;

class TourAdventuresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TourAdventures::create([
            'title' => 'Motorcycle Tours',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => 'images/tour_adventures/01.png' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,
            'slug' => 'lorem-lpsum-1'
         ]);

         TourAdventures::create([
            'title' => 'Wildlife Conservation Expeditions',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => 'images/tour_adventures/02.png' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,
            'slug' => 'lorem-lpsum-2'
         ]);

         TourAdventures::create([
            'title' => 'Surfing and Windsurfing',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => 'images/tour_adventures/03.png' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,
            'slug' => 'lorem-lpsum-2'
         ]);

         TourAdventures::create([
            'title' => 'Cultural Immersion',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => 'images/tour_adventures/04.png' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,
            'slug' => 'lorem-lpsum-2'
         ]);

         // TourAdventures::create([
         //    'title' => 'Tour Adventure 3',
         //    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //    'picture' => 'images/tour_adventures/03.png' ,
         //    'status' => 'Draft' ,
         //    'user_id' => '1' ,
         //    'slug' => 'lorem-lpsum-3'
         // ]);

         // TourAdventures::create([
         //    'title' => 'Tour Adventure 4',
         //    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //    'picture' => 'images/tour_adventures/04.png' ,
         //    'status' => 'Publish' ,
         //    'user_id' => '1' ,
         //    'slug' => 'lorem-lpsum-4'
         // ]);

         // TourAdventures::create([
         //    'title' => 'Tour Adventure 5',
         //    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //    'picture' => 'images/tour_adventures/01.png' ,
         //    'status' => 'Publish' ,
         //    'user_id' => '1' ,
         //    'slug' => 'lorem-lpsum-5'
         // ]);

         // TourAdventures::create([
         //    'title' => 'Tour Adventure 6',
         //    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //    'picture' => 'images/tour_adventures/02.png' ,
         //    'status' => 'Publish' ,
         //    'user_id' => '1' ,
         //    'slug' => 'lorem-lpsum-6'
         // ]);

         // TourAdventures::create([
         //    'title' => 'Tour Adventure 7',
         //    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //    'picture' => 'images/tour_adventures/03.png' ,
         //    'status' => 'Publish' ,
         //    'user_id' => '1' ,
         //    'slug' => 'lorem-lpsum-7'
         // ]);

         // TourAdventures::create([
         //    'title' => 'Tour Adventure 8',
         //    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //    'picture' => 'images/tour_adventures/04.png' ,
         //    'status' => 'Publish' ,
         //    'user_id' => '1' ,
         //    'slug' => 'lorem-lpsum-8'
         // ]);

         // TourAdventures::create([
         //    'title' => 'Tour Adventure 9',
         //    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //    'picture' => 'images/tour_adventures/01.png' ,
         //    'status' => 'Publish' ,
         //    'user_id' => '1' ,
         //    'slug' => 'lorem-lpsum-9'
         // ]);

         // TourAdventures::create([
         //    'title' => 'Tour Adventure 10',
         //    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //    'picture' => 'images/tour_adventures/02.png' ,
         //    'status' => 'Draft' ,
         //    'user_id' => '1' ,
         //    'slug' => 'lorem-lpsum-10'
         // ]);

         // TourAdventures::create([
         //    'title' => 'Tour Adventure 11',
         //    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //    'picture' => 'images/tour_adventures/03.png' ,
         //    'status' => 'Publish' ,
         //    'user_id' => '1' ,
         //    'slug' => 'lorem-lpsum-11'
         // ]);

    }
}
