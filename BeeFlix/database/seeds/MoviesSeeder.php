<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("movies")->insert([
            [
                "genre_id" => 1,
                "title" => "More Than Friends",
                "photo" => "d1.jpg",
                "desc" => "Serial Drama Korea More Than Friends ini menceritakan Kyung Woo Yun (Shin Ye Eun) yang polos dan berjiwa bebas seperti remaja usia 18 tahun lainnya sepuluh tahun lalu",
                "rating" => 4.9
            ],
            [
                "genre_id" => 1,
                "title" => "START-UP",
                "photo" => "d2.jpg",
                "desc" => "Serial Drama korea Start-Up (2020) menceritakan seseorang Perlu menghasilkan $ 90rb untuk membuka bisnisnya sendiri, Seo Dal-Mi keluar dari universitas dan mengambil pekerjaan paruh waktu.",
                "rating" => 5
            ],
            [
                "genre_id" => 1,
                "title" => "Tale of the Nine-Tailed",
                "photo" => "d3.jpg",
                "desc" => "Ceritanya menampilkan mitos rubah berekor sembilan, atau gumiho, Lee Yeon yang baru saja menetap di kota. Mampu berubah menjadi bentuk manusia, dia pergi tentang membersihkan roh manusia, sambil menciptakan malapetaka.",
                "rating" => "4"
            ],
            [
                "genre_id" => 1,
                "title" => "While You Were Sleeping",
                "photo" => "d4.jpg",
                "desc" => "Serial Drama Korea While You Were Sleeping (2017) ini akan bercerita tentang seorang wanita diperankan oleh Bae Suzy yang dapat melihat kejadian buruk di masa depan melalui mimpi-mimpinya.",
                "rating" => 5
            ],
            [
                "genre_id" => 2,
                "title" => "Naruto",
                "photo" => "k1.jpg",
                "desc" => "Bertahun-tahun yang lalu, di desa tersembunyi Konoha, hiduplah seekor rubah iblis yang hebat. Ketika mengayunkan salah satu dari sembilan ekornya, tsunami terjadi. ",
                "rating" => 5
            ],
            [
                "genre_id" => 2,
                "title" => "My Hero Academia",
                "photo" => "k2.jpg",
                "desc" => "Di dunia yang dihuni manusia super, Izuku Midoriya pencinta superhero tidak memiliki kekuatan. Namun, setelah pemimpi Quirkless Izuku mewarisi kekuatan superhero terbaik dunia, All Might, harapannya untuk menjadi pahlawan top sekarang menjadi mungkin.",
                "rating" => 5
            ],
            [
                "genre_id" => "2",
                "title" => "Sword Art Online",
                "photo" => "k3.jpg",
                "desc" => "Saat itu tahun 2022, dan para gamer telah berbaris pada hari peluncuran Sword Art Online, MMORPG yang ditunggu-tunggu yang memungkinkan pemain terhubung ke dunia virtual reality yang imersif dengan helm khusus yang disebut Nerve Gear.",
                "rating" => 4.5
            ],
            [
                "genre_id" => "2",
                "title" => "Your Lie in April",
                "photo" => "k4.jpg",
                "desc" => "Ceritanya mengikuti Arima Kousei, seorang pianis yang terampil. Namun, dia sudah tidak bermain sejak dia bermain untuk ibunya yang meninggal beberapa tahun lalu. Suatu hari Arima bertemu dengan seorang pemain biola yang brilian di taman.",
                "rating" => 5
            ],
            [
                "genre_id" => "3",
                "title" => "Asia's Got Talent",
                "photo" => "t1.jpg",
                "desc" => "Acara TV realitas dari Asia.",
                "rating" => 4
            ],
            [
                "genre_id" => 3,
                "title" => "American Idol",
                "photo" => "t2.jpg",
                "desc" => "Dua belas finalis Amerika (enam pria dan enam wanita) berkompetisi dalam kontes menyanyi..",
                "rating" => 3
            ],
            [
                "genre_id" => 3,
                "title" => "Master Chef Australia",
                "photo" => "t3.jpg",
                "desc" => "Beberapa lusin koki rumahan bertarung di Masterchef Kitchen untuk mendapatkan gelar koki terbaik, dinilai oleh koki top Australia.",
                "rating" => 4.5
            ],
            [
                "genre_id" => 3,
                "title" => "Master Chef America",
                "photo" => "t4.jpg",
                "desc" => "Pencarian nasional untuk koki rumahan terbaik di Amerika. Satu dari 50 calon akan menjadi bintang kuliner dan salah satu Masterchefs Amerika.",
                "rating" => 3
            ]
        ]);
    }
}
