<?php

use Illuminate\Database\Seeder;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $channel1 = ['title' => 'Laravel'];
        $channel2 = ['title' => 'Android'];
        $channel3 = ['title' => 'Vuejs'];
        $channel4 = ['title' => 'Unity'];
        $channel5 = ['title' => 'UnrealEngine'];
        $channel6 = ['title' => 'React'];
        $channel7 = ['title' => 'Swift'];

        App\Channel::create($channel1);
        App\Channel::create($channel2);
        App\Channel::create($channel3);
        App\Channel::create($channel4);
        App\Channel::create($channel5);
        App\Channel::create($channel6);
        App\Channel::create($channel7);

    }
}
