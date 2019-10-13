<?php

use App\Photo;
use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Photo::create([
            'id' => 1,
           'path' => 'admin.jpg'
        ]);

        Photo::create([
            'id' => 2,
            'path' => 'user.jpg'
        ]);

        Photo::create([
            'id' => 3,
            'path' => 'ana.jpg'
        ]);

        Photo::create([
            'id' => 4,
            'path' => 'katarina.jpg'
        ]);

        Photo::create([
            'id' => 5,
            'path' => 'laravel.jpg'
        ]);

        Photo::create([
            'id' => 6,
            'path' => 'vuejs.jpg'
        ]);

        Photo::create([
            'id' => 7,
            'path' => 'angular.jpg'
        ]);

        Photo::create([
            'id' => 8,
            'path' => 'php.jpg'
        ]);
    }
}
