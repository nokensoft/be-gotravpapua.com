<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TourAdventur;

class AdventursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TourAdventur::create([
            'title' => 'Kali Biru',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => '' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,
         ]);


         TourAdventur::create([
            'title' => 'Air terjun',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => '' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,
         ]);


         TourAdventur::create([
            'title' => 'Fesrival Bahari',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => '' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,
         ]);


    }
}
