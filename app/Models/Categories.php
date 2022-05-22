<?php

namespace App\Models;

class Categories
{
    private $categories = [
        1 => [
            'id' => 1,
            'title' => 'Спорт',
            'slug' => 'sport'
        ],
        2 => [
            'id' => 2,
            'title' => 'Экономика',
            'slug' => 'economy'
        ],
        3 => [
            'id' => 3,
            'title' => 'Общество',
            'slug' => 'society'
        ],
        4 => [
            'id' => 4,
            'title' => 'Политика',
            'slug' => 'politics'
        ],
        5 => [
            'id' => 5,
            'title' => 'Погода',
            'slug' => 'weather'
        ],

    ];

    public function getCategories() {
        return $this->categories;
    }

    public function getCategoryNameBySlug($slug) {
        $id = $this->getCategoryIdBySlug($slug);
        $category = $this->getCategoryById($id);
        return $category['title'] ?? "";
    }

    public function getCategoryIdBySlug($slug) {
        $id = null;
        foreach ($this->getCategories() as $category) {
            if ($category['slug'] == $slug) {
                $id = $category['id'];
                break;
            }
        }
        return $id;
    }

    public function getCategoryById($id)
    {
        return $this->getCategories()[$id] ?? [];
    }
}
