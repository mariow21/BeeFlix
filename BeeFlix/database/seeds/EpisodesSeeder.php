<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EpisodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,12) as $index) {
            DB::table("episodes")->insert([
                [
                    "movie_id" => 1,
                    "episode"=> "Episode $index",
                    "title" => $faker->sentence(1)
                ]                             
            ]);
        }
        foreach (range(1,12) as $index) {
            DB::table("episodes")->insert([
                [
                    "movie_id" => 2,
                    "episode"=> "Episode $index",
                    "title" => $faker->sentence(1)
                ]                             
            ]);
        }
        foreach (range(1,12) as $index) {
            DB::table("episodes")->insert([
                [
                    "movie_id" => 3,
                    "episode"=> "Episode $index",
                    "title" => $faker->sentence(1)
                ]                             
            ]);
        }
        foreach (range(1,12) as $index) {
            DB::table("episodes")->insert([
                [
                    "movie_id" => 4,
                    "episode"=> "Episode $index",
                    "title" => $faker->sentence(1)
                ]                             
            ]);
        }
        foreach (range(1,12) as $index) {
            DB::table("episodes")->insert([
                [
                    "movie_id" => 5,
                    "episode"=> "Episode $index",
                    "title" => $faker->sentence(1)
                ]                             
            ]);
        }
        foreach (range(1,12) as $index) {
            DB::table("episodes")->insert([
                [
                    "movie_id" => 6,
                    "episode"=> "Episode $index",
                    "title" => $faker->sentence(1)
                ]                             
            ]);
        }
        foreach (range(1,12) as $index) {
            DB::table("episodes")->insert([
                [
                    "movie_id" => 7,
                    "episode"=> "Episode $index",
                    "title" => $faker->sentence(1)
                ]                             
            ]);
        }
        foreach (range(1,12) as $index) {
            DB::table("episodes")->insert([
                [
                    "movie_id" => 8,
                    "episode"=> "Episode $index",
                    "title" => $faker->sentence(1)
                ]                             
            ]);
        }
        foreach (range(1,12) as $index) {
            DB::table("episodes")->insert([
                [
                    "movie_id" => 9,
                    "episode"=> "Episode $index",
                    "title" => $faker->sentence(1)
                ]                             
            ]);
        }
        foreach (range(1,12) as $index) {
            DB::table("episodes")->insert([
                [
                    "movie_id" => 10,
                    "episode"=> "Episode $index",
                    "title" => $faker->sentence(1)
                ]                             
            ]);
        }
        foreach (range(1,12) as $index) {
            DB::table("episodes")->insert([
                [
                    "movie_id" => 11,
                    "episode"=> "Episode $index",
                    "title" => $faker->sentence(1)
                ]                             
            ]);
        }
        foreach (range(1,12) as $index) {
            DB::table("episodes")->insert([
                [
                    "movie_id" => 12,
                    "episode"=> "Episode $index",
                    "title" => $faker->sentence(1)
                ]                             
            ]);
        }
    }
}
