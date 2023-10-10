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
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,

            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,

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
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,

            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,

            'picture' => 'images/tour_adventures/03.png' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,
            'slug' => 'lorem-lpsum-2'
         ]);

         TourAdventures::create([
            'title' => 'Cultural Immersion',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,

            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            
            'picture' => 'images/tour_adventures/04.png' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,
            'slug' => 'lorem-lpsum-2'
         ]);

    }
}
