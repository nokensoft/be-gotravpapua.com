<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Slider;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::create([
            'title' => 'Lorem Ipsum',
            'sub_title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'link_satu_label' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' ,
            'link_satu_url' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' ,
            'link_dua_label' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit' ,
            'link_dua_url' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'slug_slider' => 'lorem-lpsum-1'
         ]);

         Slider::create([
            'title' => 'Lorem Ipsum',
            'sub_title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'link_satu_label' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' ,
            'link_satu_url' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' ,
            'link_dua_label' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit' ,
            'link_dua_url' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'slug_slider' => 'lorem-lpsum-2'
         ]);
    }
}
