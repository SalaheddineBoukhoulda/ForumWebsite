<?php

use Illuminate\Database\Seeder;

class DiscussionsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $t1 = 'How to use visual studio for unity';
        $d1 = [
            'user_id' => 1,
            'channel_id' => 4,
            'title' => $t1,
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat justo enim, ut malesuada ligula egestas sed. Sed vel maximus mi. Suspendisse dui urna, euismod in gravida in, condimentum vitae neque. Duis faucibus nulla eget fringilla tristique. Proin sit amet varius leo. Donec lectus nisl, maximus ut tincidunt sed, maximus in nisi. Sed suscipit molestie turpis, nec suscipit erat euismod sit amet. Integer vel elit eget nisl elementum iaculis.',
            'slug' => str_slug($t1)
        ];

        $t2 = 'Settup a boiled-up project for laravel';
        $d2 = [
            'user_id' => 2,
            'channel_id' => 1,
            'title' => $t2,
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse pharetra, nunc et varius elementum, ligula augue sagittis tortor, nec scelerisque nisi magna sit amet turpis. Aenean eu diam in erat porttitor pulvinar. Phasellus finibus placerat ultricies. Ut ac fermentum turpis',
            'slug' => str_slug($t2)
        ];

        $t3 = 'Laravel fix MySql database data-length';
        $d3 = [
            'user_id' => 1,
            'channel_id' => 1,
            'title' => $t3,
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat justo enim, ut malesuada ligula egestas sed. Sed vel maximus mi. Suspendisse dui urna, euismod in gravida in, condimentum vitae neque. Duis faucibus nulla eget fringilla tristique. Proin sit amet varius leo. Donec lectus nisl, maximus ut tincidunt sed, maximus in nisi. Sed suscipit molestie turpis, nec suscipit erat euismod sit amet. Integer vel elit eget nisl elementum iaculis.',
            'slug' => str_slug($t3)
        ];

        $t4 = 'Unity configure network for multiplayer';
        $d4 = [
            'user_id' => 1,
            'channel_id' => 4,
            'title' => $t4,
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat justo enim, ut malesuada ligula egestas sed. Sed vel maximus mi. Suspendisse dui urna, euismod in gravida in, condimentum vitae neque. Duis faucibus nulla eget fringilla tristique. Proin sit amet varius leo. Donec lectus nisl, maximus ut tincidunt sed, maximus in nisi. Sed suscipit molestie turpis, nec suscipit erat euismod sit amet. Integer vel elit eget nisl elementum iaculis.',
            'slug' => str_slug($t4)
        ];

        App\Discussion::create($d1);
        App\Discussion::create($d2);
        App\Discussion::create($d3);
        App\Discussion::create($d4);
    }
}
