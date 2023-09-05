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
            'title' => 'Tour Adventure 1',
            'slug' => 'tour-adventure-1',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => '01.png' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,
            'slug_adventure' => 'lorem-lpsum-1'
         ]);


         TourAdventures::create([
            'title' => 'Tour Adventure 2',
            'slug' => 'tour-adventure-2',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => '02.png' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,
            'slug_adventure' => 'lorem-lpsum-2'
         ]);


         TourAdventures::create([
            'title' => 'Tour Adventure 3',
            'slug' => 'tour-adventure-3',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => '03.png' ,
            'status' => 'Draft' ,
            'user_id' => '1' ,
            'slug_adventure' => 'lorem-lpsum-3'
         ]);


    }
}
