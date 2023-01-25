<?php

namespace Database\Seeders;

use App\Models\Artist;
use App\Models\Museum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class artist_museum_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artists = Artist::all();
        foreach ($artists as $artist) {
            $museum_id = Museum::inRandomOrder()->first()->id;
        }
    }
}
