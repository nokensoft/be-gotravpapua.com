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
            'title' => 'Embrace the wonder of birdwatching',
            'description' => 'A serene and captivating activity that brings you closer to the fascinating world of avian life. With binoculars in hand, witness the kaleidoscope of colors and hear the melodic symphony of birds in their natural habitats. Let birdwatching ignite your curiosity and appreciation for the diverse
            winged creatures that grace our skies, offering a moment of tranquility and connection with nature.' ,
            'picture' => 'images/tour_sliders/01.png',
            'status' => 'Publish',
            'slug' => 'slider-1'
         ]);

         TourSliders::create([
            'user_id' => 1,
            'title' => 'Experience the enchanting underwater world through snorkeling',
            'description' => 'A thrilling adventure that lets you immerse yourself in the vibrant marine life. Glide through crystal-clear waters, as colorful fish dart around breathtaking coral reefs, creating a mesmerizing spectacle. Unleash your inner explorer and discover the wonders of the ocean, creating memories that will last a lifetime.' ,
            'picture' => 'images/tour_sliders/02.png',
            'status' => 'Publish',
            'slug' => 'slider-2'
         ]);

         TourSliders::create([
            'user_id' => 1,
            'title' => 'Delve into the rich and captivating world of Papuan culture',
            'description' => "Where ancient traditions blend harmoniously with modern influences. From their intricate tribal rituals to their mesmerizing traditional dances, the Papuan people's heritage is a tapestry of diverse customs and beliefs. Embark on a cultural journey that celebrates the unique and vibrant spirit of Papua, a land brimming with authenticity and warmth." ,
            'picture' => 'images/tour_sliders/03.png',
            'status' => 'Publish',
            'slug' => 'slider-2'
         ]);

         // TourSliders::create([
         //    'user_id' => 1,
         //    'title' => 'Slider 3',
         //    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //    'picture' => 'images/tour_sliders/03.png',
         //    'status' => 'Draft',
         //    'slug' => 'slider-3'
         // ]);
         // TourSliders::create([
         //     'user_id' => 1,
         //     'title' => 'Slider 4',
         //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //     'picture' => 'images/tour_sliders/01.png',
         //     'status' => 'Publish',
         //     'slug' => 'slider-4'
         //  ]);
 
         //  TourSliders::create([
         //     'user_id' => 1,
         //     'title' => 'Slider 5',
         //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //     'picture' => 'images/tour_sliders/02.png',
         //     'status' => 'Publish',
         //     'slug' => 'slider-5'
         //  ]);
 
         //  TourSliders::create([
         //     'user_id' => 1,
         //     'title' => 'Slider 6',
         //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //     'picture' => 'images/tour_sliders/03.png',
         //     'status' => 'Draft',
         //     'slug' => 'slider-6'
         //  ]);
         //  TourSliders::create([
         //      'user_id' => 1,
         //      'title' => 'Slider 7',
         //      'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //      'picture' => 'images/tour_sliders/01.png',
         //      'status' => 'Publish',
         //      'slug' => 'slider-7'
         //   ]);
  
         //   TourSliders::create([
         //      'user_id' => 1,
         //      'title' => 'Slider 8',
         //      'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //      'picture' => 'images/tour_sliders/02.png',
         //      'status' => 'Publish',
         //      'slug' => 'slider-8'
         //   ]);
  
         //   TourSliders::create([
         //      'user_id' => 1,
         //      'title' => 'Slider 9',
         //      'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //      'picture' => 'images/tour_sliders/03.png',
         //      'status' => 'Draft',
         //      'slug' => 'slider-9'
         //   ]);
         //   TourSliders::create([
         //       'user_id' => 1,
         //       'title' => 'Slider 10',
         //       'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //       'picture' => 'images/tour_sliders/01.png',
         //       'status' => 'Publish',
         //       'slug' => 'slider-10'
         //    ]);
   
         //    TourSliders::create([
         //       'user_id' => 1,
         //       'title' => 'Slider 11',
         //       'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //       'picture' => 'images/tour_sliders/02.png',
         //       'status' => 'Publish',
         //       'slug' => 'slider-11'
         //    ]);
   
         //    TourSliders::create([
         //       'user_id' => 1,
         //       'title' => 'Slider 12',
         //       'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         //       'picture' => 'images/tour_sliders/03.png',
         //       'status' => 'Draft',
         //       'slug' => 'slider-12'
         //    ]);

    }
}
