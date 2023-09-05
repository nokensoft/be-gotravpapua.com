<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TourSliders;

class TourSlidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TourSliders::create([
            'user_id' => 1,
            'title' => 'Lorem Ipsum',
            // 'sub_title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            // 'link_satu_label' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' ,
            // 'link_satu_url' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' ,
            // 'link_dua_label' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit' ,
            // 'link_dua_url' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'slug_slider' => 'lorem-lpsum-1'
         ]);

         TourSliders::create([
            'user_id' => 1,
            'title' => 'Lorem Ipsum',
            // 'sub_title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            // 'link_satu_label' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' ,
            // 'link_satu_url' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' ,
            // 'link_dua_label' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit' ,
            // 'link_dua_url' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'slug_slider' => 'lorem-lpsum-2'
         ]);
    }
}
