<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            'name' => "rajesh kumar",
            'body' => 'lorem ipsum is the dumy text',
            'avatar' => 'https://placeimg.com/100/100/people?1',
            'link' => 'https://#'
        ]);
        DB::table('testimonials')->insert([
            'name' => "Robert Downey Jr.",
            'body' => 'I am ironman',
            'avatar' => 'https://placeimg.com/100/100/people?21',
            'link' => 'https://#'
        ]);
        DB::table('testimonials')->insert([
            'name' => "Newt Scamander",
            'body' => 'These are fantastic beasts and i love them',
            'avatar' => 'https://placeimg.com/100/100/people?20',
            'link' => 'https://#'
        ]);
        DB::table('testimonials')->insert([
            'name' => "James Gordon",
            'body' => 'oh yeah, you are.',
            'avatar' => 'https://placeimg.com/100/100/people?19',
            'link' => 'https://#'
        ]);
        DB::table('testimonials')->insert([
            'name' => "takla enterprenure",
            'body' => 'Day vs Night. Kal vs Man, Black vs Blue. The Red caps are coming',
            'avatar' => 'https://placeimg.com/100/100/people?18',
            'link' => 'https://#'
        ]);
        DB::table('testimonials')->insert([
            'name' => "Batman",
            'body' => 'when the night falls. the dark knight rises',
            'avatar' => 'https://placeimg.com/100/100/people?17',
            'link' => 'https://#'
        ]);
        DB::table('testimonials')->insert([
            'name' => "Pepper Potts",
            'body' => 'Now you can rest in peace. Tony',
            'avatar' => 'https://placeimg.com/100/100/people?16',
            'link' => 'https://#'
        ]);
        DB::table('testimonials')->insert([
            'name' => "Sr. James Rhody Rhodes",
            'body' => 'Where were you up all the time? Listen Girl. Here everyone is in Super hero business',
            'avatar' => 'https://placeimg.com/100/100/people?15',
            'link' => 'https://#'
        ]);
        DB::table('testimonials')->insert([
            'name' => "The Doctor",
            'body' => 'Hello, I am the doctor. So Basically... Run!',
            'avatar' => 'https://placeimg.com/100/100/people?14',
            'link' => 'https://#'
        ]);
        DB::table('testimonials')->insert([
            'name' => "River Song",
            'body' => 'Doctor: the word for Healers and migthy warrior. We got that word from you. You Know??',
            'avatar' => 'https://placeimg.com/100/100/people?13',
            'link' => 'https://#'
        ]);
        DB::table('testimonials')->insert([
            'name' => "Aunt May",
            'body' => 'Holy Crap, You are spiderman !!!',
            'avatar' => 'https://placeimg.com/100/100/people?12',
            'link' => 'https://#'
        ]);
        DB::table('testimonials')->insert([
            'name' => "Peter Parker",
            'body' => 'Magic Punch, Magic Jump, Magic Kick, Magic Flip',
            'avatar' => 'https://placeimg.com/100/100/people?11',
            'link' => 'https://#'
        ]);
        DB::table('testimonials')->insert([
            'name' => "Peter Quill",
            'body' => 'people call me Starlord',
            'avatar' => 'https://placeimg.com/100/100/people?10',
            'link' => 'https://#'
        ]);
        DB::table('testimonials')->insert([
            'name' => "Groot",
            'body' => 'I am groot',
            'avatar' => 'https://placeimg.com/100/100/people?9',
            'link' => 'https://#'
        ]);
        DB::table('testimonials')->insert([
            'name' => "Arthur Curry",
            'body' => 'sea is mine and Nicole Kidman is my mother',
            'avatar' => 'https://placeimg.com/100/100/people?8',
            'link' => 'https://#'
        ]);
        DB::table('testimonials')->insert([
            'name' => "Christina Stewart",
            'body' => 'i am going to be a vampire.',
            'avatar' => 'https://placeimg.com/100/100/people?7',
            'link' => 'https://#'
        ]);
        DB::table('testimonials')->insert([
            'name' => "Archie Andrews",
            'body' => 'I am beautiful',
            'avatar' => 'https://placeimg.com/100/100/people?6',
            'link' => 'https://#'
        ]);
        DB::table('testimonials')->insert([
            'name' => "Jughead jones",
            'body' => 'Here was the Jughead jones',
            'avatar' => 'https://placeimg.com/100/100/people?5',
            'link' => 'https://#'
        ]);
        DB::table('testimonials')->insert([
            'name' => "Sir Patrick Stewart",
            'body' => 'You go as you come',
            'avatar' => 'https://placeimg.com/100/100/people?4',
            'link' => 'https://#'
        ]);
        DB::table('testimonials')->insert([
            'name' => "Mark Henry",
            'body' => 'Go to the brightest place of the world and you will find only yourself there',
            'avatar' => 'https://placeimg.com/100/100/people?3',
            'link' => 'https://#'
        ]);
    }
}
