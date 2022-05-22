<?php

namespace App\Models;

use Faker\Factory;
use App\Models\Categories;
use Illuminate\Support\Str;

class News
{
    private Categories $category;

    public function __construct(Categories $category)
    {
        $this->category = $category;
    }

    public function getNews(int $id = null):array
    {
        $news = [];
        $faker = Factory::create();

        if ($id) {
            return [
                'id' => $id,
                'category_id'=> rand(1,5),
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
                'category_id'=> rand(1,5),
                'title' => $faker->jobTitle(),
                'author' => $faker->name(),
                'image' => $faker->imageUrl(),
                'description' => $faker->text(150),
                'created_at' => now()
            ];
        }

        return $news;
    }

    public function getNewsByCategorySlug($slug) {
        $id = $this->category->getCategoryIdBySlug($slug);
        return $this->getNewsByCategoryId($id);
    }

    public function getNewsByCategoryId($id) {
        $news = [];
        foreach ($this->getNews() as $item) {
            if ($item['category_id'] == $id) {
                $news[] = $item;
            }
        }
        return $news;
    }

    public function getNewsById($id)
    {
          return $this->getNews()[$id] ?? [];
    }
}
