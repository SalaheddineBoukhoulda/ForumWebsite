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

        App\User::create($channel1);
        App\User::create($channel2);
        App\User::create($channel3);
        App\User::create($channel4);
        App\User::create($channel5);
        App\User::create($channel6);
        App\User::create($channel7);

    }
}
