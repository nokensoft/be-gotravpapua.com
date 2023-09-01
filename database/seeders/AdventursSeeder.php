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
            'title' => 'Lorem Ipsum',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => '' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,
            'slug_adventur' => 'lorem-lpsum-1'
         ]);


         TourAdventur::create([
            'title' => 'Lorem Ipsum',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => '' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,
            'slug_adventur' => 'lorem-lpsum-2'
         ]);


         TourAdventur::create([
            'title' => 'Fesrival Bahari',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => '' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,
            'slug_adventur' => 'lorem-lpsum-3'
         ]);


    }
}
