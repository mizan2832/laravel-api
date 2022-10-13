<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'author' => 'Mizanur Rahman',
            'title' =>  'larave is cool',
            'description' => 'larave is coollarave is coollarave is coollarave is coollarave is coollarave is coollarave is cool',
        ]);
        DB::table('posts')->insert([
            'author' => 'Farjana Mitu',
            'title' =>  'laravel api',
            'description' => 'laravel api shoulbe be learn',
        ]);
        DB::table('posts')->insert([
            'author' => 'Abdur Rahman',
            'title' =>  'React must have to be completed',
            'description' => 'react is a frontend framework',
        ]);
    }
}
