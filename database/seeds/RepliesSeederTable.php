<?php

use Illuminate\Database\Seeder;

class RepliesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r1 = [
            'user_id' => 1,
            'discussion_id' => 1,
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse pharetra, nunc et varius elementum, ligula augue sagittis tortor, nec scelerisque nisi magna sit amet turpis. Aenean eu diam in erat porttitor pulvinar. Phasellus finibus placerat ultricies. Ut ac fermentum turpis'
        ];

        $r2 = [
            'user_id' => 1,
            'discussion_id' => 2,
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse pharetra, nunc et varius elementum, ligula augue sagittis tortor, nec scelerisque nisi magna sit amet turpis. Aenean eu diam in erat porttitor pulvinar. Phasellus finibus placerat ultricies. Ut ac fermentum turpis'
        ];

        $r3 = [
            'user_id' => 1,
            'discussion_id' => 3,
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse pharetra, nunc et varius elementum, ligula augue sagittis tortor, nec scelerisque nisi magna sit amet turpis. Aenean eu diam in erat porttitor pulvinar. Phasellus finibus placerat ultricies. Ut ac fermentum turpis'
        ];

        $r4 = [
            'user_id' => 1,
            'discussion_id' => 4,
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse pharetra, nunc et varius elementum, ligula augue sagittis tortor, nec scelerisque nisi magna sit amet turpis. Aenean eu diam in erat porttitor pulvinar. Phasellus finibus placerat ultricies. Ut ac fermentum turpis'
        ];

        App\Reply::create($r1);
        App\Reply::create($r2);
        App\Reply::create($r3);
        App\Reply::create($r4);
    }
}
