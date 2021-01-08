<?php

use App\Models\Photo;
use App\Models\Album;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class PhotoAlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('albums')->truncate();
        DB::table('photos')->truncate();

        $photosFromSource = Http::get('https://jsonplaceholder.typicode.com/photos')->json();
        $albumsFromSource = Http::get('https://jsonplaceholder.typicode.com/albums')->json();

        foreach($photosFromSource as $photo) {
            Photo::insert([
                '_id'=>$photo[Photo::ID],
                'album_id'=>$photo[Photo::ALBUM_ID],
                'title'=>$photo[Photo::TITLE],
                'url'=>$photo[Photo::URL],
                'thumbnail_url'=>$photo[Photo::THUMBNAIL_URL],
            ]);
        }

        foreach($albumsFromSource as $album) {
            Album::insert([
                '_id'=>$album[Album::ID],
                'user_id'=>$album[Album::USER_ID],
                'title'=>$album[Album::TITLE]
            ]);
        }
    }
}
