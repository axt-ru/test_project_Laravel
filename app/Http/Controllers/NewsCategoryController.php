<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    public function index()
    {
        $newsCat = $this->getNewsCat();
        return view('news/newsCategory',[
            'newsCatList' => $newsCat
        ]);
    }
}
