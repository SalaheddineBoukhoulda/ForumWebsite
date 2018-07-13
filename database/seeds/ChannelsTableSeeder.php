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
        $channel1 = ['title' => 'Laravel','slug' => str_slug('Laravel')];
        $channel2 = ['title' => 'Android','slug' => str_slug('Android')];
        $channel3 = ['title' => 'Vuejs','slug' => str_slug('Vuejs')];
        $channel4 = ['title' => 'Unity','slug' => str_slug('Unity')];
        $channel5 = ['title' => 'UnrealEngine','slug' => str_slug('UnrealEngine')];
        $channel6 = ['title' => 'React','slug' => str_slug('React')];
        $channel7 = ['title' => 'Swift','slug' => str_slug('Swift')];

        App\Channel::create($channel1);
        App\Channel::create($channel2);
        App\Channel::create($channel3);
        App\Channel::create($channel4);
        App\Channel::create($channel5);
        App\Channel::create($channel6);
        App\Channel::create($channel7);

    }
}
