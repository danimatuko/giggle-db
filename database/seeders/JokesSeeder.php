<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class JokesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * This method inserts 20 jokes into the database, each with a random
     * creation and update timestamp generated within the last 12 months.
     *
     * @return void
     */
    public function run()
    {
        $jokes = [
            [
                'setup' => 'Why don’t skeletons fight each other?',
                'punchline' => 'They don’t have the guts!',
            ],
            [
                'setup' => 'What do you call fake spaghetti?',
                'punchline' => 'An impasta!',
            ],
            [
                'setup' => 'Why did the scarecrow win an award?',
                'punchline' => 'Because he was outstanding in his field!',
            ],
            [
                'setup' => 'Why don’t eggs tell jokes?',
                'punchline' => 'They might crack up!',
            ],
            [
                'setup' => 'Why did the bicycle fall over?',
                'punchline' => 'Because it was two-tired!',
            ],
            [
                'setup' => 'How do you organize a space party?',
                'punchline' => 'You planet!',
            ],
            [
                'setup' => 'What’s orange and sounds like a parrot?',
                'punchline' => 'A carrot!',
            ],
            [
                'setup' => 'Why can’t you trust stairs?',
                'punchline' => 'They’re always up to something!',
            ],
            [
                'setup' => 'What do you call cheese that isn’t yours?',
                'punchline' => 'Nacho cheese!',
            ],
            [
                'setup' => 'Why did the golfer bring two pairs of pants?',
                'punchline' => 'In case he got a hole in one!',
            ],
            [
                'setup' => 'Why did the chicken join a band?',
                'punchline' => 'Because it had drumsticks!',
            ],
            [
                'setup' => 'What’s a skeleton’s least favorite room?',
                'punchline' => 'The living room!',
            ],
            [
                'setup' => 'What did one ocean say to the other ocean?',
                'punchline' => 'Nothing, they just waved!',
            ],
            [
                'setup' => 'What do you call a pile of cats?',
                'punchline' => 'A meow-tain!',
            ],
            [
                'setup' => 'How do cows stay up to date with current events?',
                'punchline' => 'They read the moo-spaper!',
            ],
            [
                'setup' => 'What did the grape do when it got stepped on?',
                'punchline' => 'Nothing but let out a little wine!',
            ],
            [
                'setup' => 'Why did the computer go to the doctor?',
                'punchline' => 'Because it had a virus!',
            ],
            [
                'setup' => 'Why did the tomato turn red?',
                'punchline' => 'Because it saw the salad dressing!',
            ],
            [
                'setup' => 'Why can’t you hear a pterodactyl go to the bathroom?',
                'punchline' => 'Because the “P” is silent!',
            ],
            [
                'setup' => 'What’s a pirate’s favorite letter?',
                'punchline' => 'Arrrrrr!',
            ],
        ];

        $data = [];
        $now = Carbon::now(); // Get the current date and time
        $oneYearAgo = Carbon::now()->subYear(); // Get the date 12 months ago

        foreach ($jokes as $joke) {
            // Generate a random timestamp between the last 12 months
            $randomDate = Carbon::createFromTimestamp(rand(
                $oneYearAgo->timestamp,
                $now->timestamp
            ));

            $data[] = [
                'setup' => $joke['setup'],
                'punchline' => $joke['punchline'],
                'created_at' => $randomDate,
                'updated_at' => $randomDate,
            ];
        }

        DB::table('jokes')->insert($data);
    }
}
