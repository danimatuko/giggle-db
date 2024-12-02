<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JokesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('jokes')->insert([
            [
                'setup' => 'Why don’t skeletons fight each other?',
                'punchline' => 'They don’t have the guts!',
                'created_at' => '2024-12-01 12:00:00',
                'updated_at' => '2024-12-01 12:00:00',
            ],
            [
                'setup' => 'What do you call fake spaghetti?',
                'punchline' => 'An impasta!',
                'created_at' => '2024-12-02 14:00:00',
                'updated_at' => '2024-12-02 14:00:00',
            ],
            [
                'setup' => 'Why did the scarecrow win an award?',
                'punchline' => 'Because he was outstanding in his field!',
                'created_at' => '2024-12-03 16:00:00',
                'updated_at' => '2024-12-03 16:00:00',
            ]
]);
    }
}
