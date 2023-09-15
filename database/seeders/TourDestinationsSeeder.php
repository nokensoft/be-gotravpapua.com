<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TourDestinations;

class TourDestinationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TourDestinations::create([
            'title' => 'Tour Destination 1',
            'slug' => 'tour-destination-1',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => 'images/tour_destinations/01.png' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,

         ]);

         TourDestinations::create([
            'title' => 'Tour Destination 2',
            'slug' => 'tour-destination-2',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => 'images/tour_destinations/02.png' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,

         ]);

         TourDestinations::create([
            'title' => 'Tour Destination 3',
            'slug' => 'tour-destination-3',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => 'images/tour_destinations/03.png' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,

         ]);

         TourDestinations::create([
            'title' => 'Tour Destination 4',
            'slug' => 'tour-destination-4',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => 'images/tour_destinations/04.png' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,

         ]);

         TourDestinations::create([
            'title' => 'Tour Destination 5',
            'slug' => 'tour-destination-5',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => 'images/tour_destinations/01.png' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,

         ]);

         TourDestinations::create([
            'title' => 'Tour Destination 6',
            'slug' => 'tour-destination-6',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => 'images/tour_destinations/02.png' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,

         ]);

         TourDestinations::create([
            'title' => 'Tour Destination 7',
            'slug' => 'tour-destination-7',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => 'images/tour_destinations/03.png' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,

         ]);

         TourDestinations::create([
            'title' => 'Tour Destination 8',
            'slug' => 'tour-destination-8',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => 'images/tour_destinations/04.png' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,

         ]);

         TourDestinations::create([
            'title' => 'Tour Destination 9',
            'slug' => 'tour-destination-9',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => 'images/tour_destinations/01.png' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,

         ]);

         TourDestinations::create([
            'title' => 'Tour Destination 10',
            'slug' => 'tour-destination-10',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => 'images/tour_destinations/02.png' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,

         ]);

         TourDestinations::create([
            'title' => 'Tour Destination 11',
            'slug' => 'tour-destination-11',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => 'images/tour_destinations/03.png' ,
            'status' => 'Draft' ,
            'user_id' => '1' ,

         ]);

         TourDestinations::create([
            'title' => 'Tour Destination 12',
            'slug' => 'tour-destination-12',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => 'images/tour_destinations/04.png' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,

         ]);

         TourDestinations::create([
            'title' => 'Tour Destination 13',
            'slug' => 'tour-destination-13',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => 'images/tour_destinations/01.png' ,
            'status' => 'Draft' ,
            'user_id' => '1' ,

         ]);
    }
}
