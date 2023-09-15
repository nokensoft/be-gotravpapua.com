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
            'title' => 'Slider 1',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => 'images/tour_sliders/01.png',
            'status' => 'Publish',
            'slug' => 'slider-1'
         ]);

         TourSliders::create([
            'user_id' => 1,
            'title' => 'Slider 2',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => 'images/tour_sliders/02.png',
            'status' => 'Publish',
            'slug' => 'slider-2'
         ]);

         TourSliders::create([
            'user_id' => 1,
            'title' => 'Slider 3',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => 'images/tour_sliders/03.png',
            'status' => 'Draft',
            'slug' => 'slider-3'
         ]);
         TourSliders::create([
             'user_id' => 1,
             'title' => 'Slider 4',
             'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
             'picture' => 'images/tour_sliders/01.png',
             'status' => 'Publish',
             'slug' => 'slider-4'
          ]);
 
          TourSliders::create([
             'user_id' => 1,
             'title' => 'Slider 5',
             'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
             'picture' => 'images/tour_sliders/02.png',
             'status' => 'Publish',
             'slug' => 'slider-5'
          ]);
 
          TourSliders::create([
             'user_id' => 1,
             'title' => 'Slider 6',
             'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
             'picture' => 'images/tour_sliders/03.png',
             'status' => 'Draft',
             'slug' => 'slider-6'
          ]);
          TourSliders::create([
              'user_id' => 1,
              'title' => 'Slider 7',
              'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
              'picture' => 'images/tour_sliders/01.png',
              'status' => 'Publish',
              'slug' => 'slider-7'
           ]);
  
           TourSliders::create([
              'user_id' => 1,
              'title' => 'Slider 8',
              'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
              'picture' => 'images/tour_sliders/02.png',
              'status' => 'Publish',
              'slug' => 'slider-8'
           ]);
  
           TourSliders::create([
              'user_id' => 1,
              'title' => 'Slider 9',
              'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
              'picture' => 'images/tour_sliders/03.png',
              'status' => 'Draft',
              'slug' => 'slider-9'
           ]);
           TourSliders::create([
               'user_id' => 1,
               'title' => 'Slider 10',
               'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
               'picture' => 'images/tour_sliders/01.png',
               'status' => 'Publish',
               'slug' => 'slider-10'
            ]);
   
            TourSliders::create([
               'user_id' => 1,
               'title' => 'Slider 11',
               'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
               'picture' => 'images/tour_sliders/02.png',
               'status' => 'Publish',
               'slug' => 'slider-11'
            ]);
   
            TourSliders::create([
               'user_id' => 1,
               'title' => 'Slider 12',
               'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
               'picture' => 'images/tour_sliders/03.png',
               'status' => 'Draft',
               'slug' => 'slider-12'
            ]);

    }
}
