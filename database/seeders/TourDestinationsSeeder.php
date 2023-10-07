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
           'title' => 'Baliem Valley',
           'slug' => 'baliem-valley',

           'description' => "To explore Indonesia's highest Jayawijaya Mountains, it's essential to also visit the Baliem Valley, 27 km from Wamena, where three main tribes, the Dani, Yali, and Lani, reside in a vast 1,600 km² valley rich with traditional culture, refreshing scenery, and a renowned Baliem Valley Festival, offering a deeper understanding of Papua." ,

           'body' => 'It is common knowledge that the Jayawijaya Mountains are the highest in Indonesia. Well, if you visit these mountains, you must also stop by the Baliem Valley, which is located 27 km from Wamena, Papua. In this vast valley, spanning 1,600 km², three main tribes inhabit it, namely the Dani, Yali, and Lani tribes.

           Aside from the cool climate and refreshing natural scenery, the allure of this destination lies in the traditional houses and rich culture among the indigenous people. In fact, there is a famous cultural festival here, the Baliem Valley Festival. You should come here if you want to get to know Papua better!' ,

           'picture' => 'images/tour_destinations/baliem-valley.png' ,
           'status' => 'Publish' ,
           'user_id' => '1' ,

        ]);

        TourDestinations::create([
           'title' => 'Warsarak Waterfal',
           'slug' => 'warsarak-waterfal',

           'description' => "The sunsets in Santorini are breathtakingly beautiful, painting the sky with a mesmerizing blend of colors.",

           'body' => "Looking to explore a hidden paradise in Papua? Wafsarak Waterfall in North Biak, West Papua is the answer! The scenery of this 10-meter-high waterfall is like a place to unwind in the midst of a pristine forest. You can even hear the roaring sound of the waterfall from the roadside because of its easy accessibility. The water in the waterfall pool is crystal clear, making it perfect for swimming and playing in the water with children. If you're bringing your family along, visiting this tourist spot is a must-do!" ,

           'picture' => 'images/tour_destinations/warsarak-waterfal.png' ,
           'status' => 'Publish' ,
           'user_id' => '1' ,

        ]);

        TourDestinations::create([
            'title' => 'Sentani Lake',
            'slug' => 'sentani-lake',
            
            'description' => 'Lake Sentani, the largest lake in Papua, boasts a stunning landscape and serves as a source of pride for the locals due to its unique amoeba-like shape, abundant fish production, and the attraction of 22 small islands, making it a popular tourist destination.' ,

            'body' => 'Here it is, the largest lake in Papua with a fantastic panorama and a source of pride for the local community! It is none other than Lake Sentani, located in the Jayapura Regency. This lake, covering an area of 9,360 hectares, is the source of water for 14 major and minor rivers. Not only that, but it is also a champion in fish production, reaching up to 1,823 tons per year!

            With its unique amoeba-like shape, the lake is adorned with 22 small islands that enhance its beauty. It is no wonder that Lake Sentani is a favorite tourist destination bustling with visitors.' ,

            'picture' => 'images/tour_destinations/sentani-lake.png' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,

         ]);
         TourDestinations::create([
             'title' => 'Base-G Beach',
             'slug' => 'base-g-beach',

             'description' => 'Base-G Beach in Jayapura, Papua, known for its scenic beauty and historical significance from World War II, offers a relaxing experience with gentle waves and pristine sands, making it a must-visit destination for those exploring Papua.' ,

             'body' => 'In Papua, there is a beach as beautiful as a painting called Base-G Beach, located in the city of Jayapura. The name of this beach originates from the Allied forces during World War II, who used it as a military base. Another name for this beach is Tanjung Ria Beach.

             Now, if you visit this beach, you will undoubtedly feel relaxed thanks to the soothing sound of the waves, which are not too large. Moreover, the clean sand stretching along the beach will make you want to take photos continuously! In short, you shouldn not miss this beach when you visit Papua!' ,

             'picture' => 'images/tour_destinations/base-g-beach.png' ,
             'status' => 'Publish' ,
             'user_id' => '1' ,
 
          ]);

         TourDestinations::create([
            'title' => 'Wasur National Park',
            'slug' => 'wasur-national-park',

            'description' => 'A visit to Papua is incomplete without encountering unique fauna like the cassowary, and the Wasur National Park in Merauke Regency, with its vast savannah and diverse migratory fauna, offers an adventurous experience.' ,

            'body' => 'Exploring Papua wouldn it be complete without encountering unique fauna like the cassowary bird. You can discover the rich flora and fauna of Papua in the Wasur National Park, located in the Merauke Regency. Covering an expansive 413,810 hectares of land, this park boasts the largest savannah in Indonesia and even in Asia. Most of the park is fauna are migratory and inhabit six different ecosystems. If you visit here, it feels like embarking on an adventure!' ,

            'picture' => 'images/tour_destinations/wasur-national-park.png' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,

         ]);

         TourDestinations::create([
            'title' => 'Lorentz National Park',
            'slug' => 'lorentz-national-park',

            'description' => 'Lorentz National Park in Papua, recognized as a UNESCO World Heritage site and spanning 2,505,600 hectares across 10 regencies with diverse entry points, boasts the most extensive and diverse ecosystems in the Asia-Pacific region, featuring unique fauna such as the long-tailed paradise bird, snow quail, and dingiso tree kangaroo.' ,

            'body' => 'Not any less spectacular, Lorentz National Park in Papua boasts the largest magnificence in Southeast Asia and is recognized as a UNESCO World Heritage site. Given its vast expanse of 2,505,600 hectares, this park spans 10 regencies in Papua, with three different cities—Timika, Wamena, and Enarotali—serving as entry points. It is incredibly vast, isn it it, travel enthusiasts!

            Moreover, Lorentz National Park also holds the title of being the largest conservation area with the most comprehensive ecosystems in the Asia-Pacific region. Its distinctive fauna includes the long-tailed paradise bird, the snow quail, and the dingiso tree kangaroo. Wow, it seems like you should get acquainted with these diverse animals when you visit!' ,

            'picture' => 'images/tour_destinations/lorentz-national-park.png' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,

         ]);

    }
}
