<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TourMessages;

class TourMessagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        TourMessages::create([
            'name' => 'Janzen Faidiban',
            'email' => 'janzen.faidiban@nokensoft.com',
            'phone' => '082199558191',
            'message' => 'Hello, I am Janzen from Nokensoft.',
        ]);

        TourMessages::create([
            'name' => 'Christoper Zonggonau',
            'email' => 'zonggonau@sacode.web.id',
            'phone' => '082199558191',
            'message' => 'Hello, I am Janzen from SaCode and I want to explore Nabire. Please send me a guidance. Thanks.',
        ]);
    }
}
