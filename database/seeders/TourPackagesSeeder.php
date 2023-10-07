<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TourPackages;

class TourPackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TourPackages::create([
            'title' => 'Snorkeling With Whale Shark in Nabire',
            'slug' => 'snorkeling-with-whale-shark-in-nabire',
            'body' => '5 days exploring Nabire Regency and do snorkeling with whale shark in Nabire. You will also visit some beautiful places around',
            'description' => '4 days exploring Nabire Regency and do snorkeling with whale shark in Nabire. You will also visit some beautiful places around',
            'picture' => 'images/tour_packages/01.png',
            'status' => 'Publish',
            'user_id' => '1',
        ]);

        TourPackages::create([
            'title' => 'Exploring the Biak Islands',
            'slug' => 'exploring-the-biak-islands',
            'body' => '5 days some in eoormous places around Biak. Visiting beautiful islands, iconik buildings, and historical placces.',
            'description' => '5 days some in eoormous places around Biak. Visiting beautiful islands, iconik buildings, and historical placces.',
            'picture' => 'images/tour_packages/02.png',
            'status' => 'Publish',
            'user_id' => '1',
        ]);

        // TourPackages::create([
        //     'title' => 'Tour Package 3',
        //     'slug' => 'tour-package-3',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!',
        //     'picture' => 'images/tour_packages/03.png',
        //     'status' => 'Publish',
        //     'user_id' => '1',
        // ]);

        // TourPackages::create([
        //     'title' => 'Tour Package 4',
        //     'slug' => 'tour-package-4',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!',
        //     'picture' => 'images/tour_packages/03.png',
        //     'status' => 'Draft',
        //     'user_id' => '1',
        // ]);

        // TourPackages::create([
        //     'title' => 'Tour Package 5',
        //     'slug' => 'tour-package-5',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!',
        //     'picture' => 'images/tour_packages/03.png',
        //     'status' => 'Publish',
        //     'user_id' => '1',
        // ]);

        // TourPackages::create([
        //     'title' => 'Tour Package 6',
        //     'slug' => 'tour-package-6',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!',
        //     'picture' => 'images/tour_packages/03.png',
        //     'status' => 'Publish',
        //     'user_id' => '1',
        // ]);

        // TourPackages::create([
        //     'title' => 'Tour Package 7',
        //     'slug' => 'tour-package-7',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!',
        //     'picture' => 'images/tour_packages/03.png',
        //     'status' => 'Publish',
        //     'user_id' => '1',
        // ]);

        // TourPackages::create([
        //     'title' => 'Tour Package 8',
        //     'slug' => 'tour-package-8',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!',
        //     'picture' => 'images/tour_packages/03.png',
        //     'status' => 'Publish',
        //     'user_id' => '1',
        // ]);

        // TourPackages::create([
        //     'title' => 'Tour Package 9',
        //     'slug' => 'tour-package-9',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!',
        //     'picture' => 'images/tour_packages/03.png',
        //     'status' => 'Publish',
        //     'user_id' => '1',
        // ]);

        // TourPackages::create([
        //     'title' => 'Tour Package 10',
        //     'slug' => 'tour-package-10',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!',
        //     'picture' => 'images/tour_packages/03.png',
        //     'status' => 'Publish',
        //     'user_id' => '1',
        // ]);
    }
}
