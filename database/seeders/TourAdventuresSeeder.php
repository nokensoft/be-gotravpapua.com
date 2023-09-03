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
            'title' => 'Scuba Diving and Snorkeling',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => '01.png' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,
            'slug_adventures' => 'lorem-lpsum-1'
         ]);


         TourAdventures::create([
            'title' => 'Hiking and Trekking',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => '02.png' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,
            'slug_adventures' => 'lorem-lpsum-2'
         ]);


         TourAdventures::create([
            'title' => 'Cultural Immersion',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => '03.png' ,
            'status' => 'Draft' ,
            'user_id' => '1' ,
            'slug_adventures' => 'lorem-lpsum-3'
         ]);


    }
}
