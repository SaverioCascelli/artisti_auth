<?php

namespace Database\Seeders;

use App\Models\Artist;
use App\Models\Artwork;
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
        $artworks = Artwork::all();
        foreach ($artworks as $artwork) {
            $rand_museum_id = Museum::inRandomOrder()->first()->id;

            $artist_id = $artwork->artist_id;
            $artists = Artist::all();
            $artist = $artists->find($artist_id);
            $artist->museums()->attach($rand_museum_id);
        }
    }
}
