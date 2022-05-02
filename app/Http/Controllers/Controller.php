<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getNews(int $id = null):array
    {
        $news = [];
        $faker = Factory::create();

        if ($id) {
            return [
                'id' => $id,
                'title' => $faker->jobTitle(),
                'author' => $faker->name(),
                'image' => $faker->imageUrl(),
                'description' => $faker->text(150),
                'created_at' => now()
            ];
        }

        for($i=0; $i<20; $i++) {
            $id = $i + 1;
            $news[] = [
                'id' => $id,
                'idCat'=> rand(1,5),
                'title' => $faker->jobTitle(),
                'author' => $faker->name(),
                'image' => $faker->imageUrl(),
                'description' => $faker->text(150),
                'created_at' => now()
            ];
        }

        return $news;
    }

    public function getNewsCat():array
    {
        $newsCat = [
            '1'=>'Sport',
            '2'=>'Economy',
            '3'=>'Society',
            '4'=>'Law',
            '5'=>'Weather'
        ];
        return $newsCat;
    }
}
