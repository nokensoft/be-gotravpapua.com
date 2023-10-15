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
            'title' => 'Whales Sharks Tour in Nabire (Cenderawasih Bay, Papua Province)',
            'slug' => 'whales-sharks-tour-in-nabire',
            'body' => '<h2><strong>Day 1: Arrival Nabire &ndash; City Tour Nabire</strong></h2>

            <p>We will pick you up from the airport in Nabire. After checking in to your hotel you will be introduced to the small and friendly town of Nabire. During this city tour you will visit a traditional market where you can see the Papuan woman sell home grown vegetables and beautiful traditional handmade bags called &lsquo;noken&rsquo;. You will visit &lsquo;tembok MAF&rsquo; which is a popular hangout place for the locals, especially at sunset. Try some of the local food and fruits as the sun dips and mix in with the local life.</p>
            
            <p><em>Meals: None</em></p>
            
            <p><em>Accommodation: Nusantara Hotel &ndash; AC Room</em></p>
            
            <h2><strong>Day 2: Transfer to Sowa &ndash; Trip to Whale Sharks &ndash; Fish Barbeque</strong></h2>
            
            <p>An early departure to Sowa. It is around 3 hours to drive to Sowa with the last part on poor roads. You will have a short break before you continue by speedboat to in search of the whale sharks. The whale sharks feed at the Bagan (Feeding spots) which are traditional fish platforms. Be silent and careful in your first approach, or else you might scare the whale sharks away. Sometimes there are up to 4 whale sharks which can be seen at any one time. A late fish barbeque will be served on a beautiful small island where you can swim and enjoy the last hours of the day.</p>
            
            <p><em>Meals: Breakfast, Lunch &amp; Dinner</em></p>
            
            <p><em>Accommodation: Local House Sowa &ndash;Basi</em></p>
            
            <p><em>Basic Room &ndash; Shared Bathroom Outside</em></p>
            
            <h2><strong>Day 3: Second trip to Whale Sharks &ndash; Back to Nabire</strong></h2>
            
            <p>In the morning, you will have a second trip to visit the whale sharks. Lunch will be served in the homestay. After lunch you will drive back to Nabire.</p>
            
            <p><em>Meals: Breakfast &amp; Lunch</em></p>
            
            <p><em>Accommodation: Nusantara Hotel &ndash; AC Room</em></p>
            
            <h2><strong>Day 4: Transfer to Airport</strong></h2>
            
            <p>Our driver will transfer you to the airport of Nabire for your onward flight. (B)</p>
            
            <h3><strong>Inclusions:</strong></h3>
            
            <ul>
                <li>
                <p>Return airport transfers</p>
                </li>
                <li>3 nights&rsquo; accommodation</li>
                <li>Meals as mentioned</li>
                <li>Transfer to/from Sowa</li>
                <li>2 x Swimming excursions with Whale sharks</li>
                <li>City Tour Nabire</li>
            </ul>
            
            <h3><strong>Exclusions:</strong></h3>
            
            <ul>
                <li>
                <p>Visas where required</p>
                </li>
                <li>International flight to Nabire / from Nabire and airport tax. Ends!</li>
            </ul>
            ',
            'description' => '4 days exploring Nabire Regency and do snorkeling with whale shark in Nabire. You will also visit some beautiful places around',
            'picture' => 'images/tour_packages/01.png',
            'status' => 'Publish',
            'user_id' => '1',
        ]);

        TourPackages::create([
            'title' => 'Biak Islands Tour Packages',
            'slug' => 'biak-islands-tour-packages',
            'body' => '<h2><strong>Day 1:</strong></h2>

            <p>After arriving in the morning at Biak frans kaisiepo airport, you will be picked up and escorted to the hotel for breakfast and rest, after that you will be picked up for lunch and then head to the Barupi Padwa lake fairyland area, which is an area in the middle of the forest that is sometimes submerged in water and surrounded by aquaspace plants and tree roots that are enchanting like in a fairyland dream. After being satisfied taking pictures there, we will then head to the King of Three Biak area and the enchanting Padwa Beach to relax and enjoy the sunset view there. after that we get ready for dinner and return to the hotel to rest.</p>
            
            <h2><strong>Day 2:</strong></h2>
            
            <p>After breakfast at 8.30 am, we will go to the enchanting Samares Blue Lake area. after being satisfied swimming and taking pictures there, we will go to Anggopi beach in East Biak and we will snorkel there while having lunch and after that we will go to the Biak city bird and orchid park area to see birds native to the Papua region and we will stop by taking pictures in the Ruar mangrove forest park area and after that we get ready for dinner and return to the hotel to rest.</p>
            
            <h2><strong>Day 3 :</strong></h2>
            
            <p>After breakfast we will head to Samber Pasi island for snorkeling there and lunch and then we will head to Urbi island area with its enchanting white sand to take pictures and then we will return to the hotel for dinner and rest.</p>
            
            <h2><strong>Day 4 :</strong></h2>
            
            <p>After breakfast at 8.30 am and after that we will visit Binsari Cave area, a historical cave of the second world war that holds many stories and relics of the second world war in biak between the Japanese army and the allies while looking at artifacts and tools of war that are neatly stored in the history museum there. Next we will head to wari beach in north biak, after being satisfied taking pictures there, then we will relax playing water in the Karmon waterfall area and have lunch there then we will head to the Picah Biak stone area to watch the big waves in the Pacific Ocean area of Biak city and after that we will relax in the BMJ sorido beach area to see the enchanting Sunset then we will have dinner and return to the hotel to rest.</p>
            
            <h2><strong>Day 5 :</strong></h2>
            
            <p>After breakfast we will check out and then head to the airport then it means the end of this Gotrav package hopefully memorable and come back again in the future.</p>
            
            <h3><strong>Include:</strong></h3>
            
            <ul>
                <li>
                <p>Meals 3x a day</p>
                </li>
                <li>Accommodation:</li>
            </ul>
            
            <p>Swissbell Cendrawasih hotel Biak (double room)</p>
            
            <ul>
                <li>Boat charter while in Biak</li>
                <li>Tour Leader</li>
                <li>Frans Kaisiepo Biak Airport Transfer&nbsp;</li>
                <li>Snorkeling Equipment</li>
                <li>Car during the trip in Biak</li>
            </ul>
            
            <h3><strong>Not included:</strong></h3>
            
            <p>- Airplane tickets (there are Garuda, Lion and Sriwijaya airplanes to Biak Frans Kaisiepo Airport).</p>
            ',
            'description' => '5 days some in eoormous places around Biak. Visiting beautiful islands, iconik buildings, and historical placces.',
            'picture' => 'images/tour_packages/02.png',
            'status' => 'Publish',
            'user_id' => '1',
        ]);

    }
}
