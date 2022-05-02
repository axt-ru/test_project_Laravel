<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = $this->getNews();
        return view('news/index',[
            'newsList' => $news
            ]);
    }

    public function auth()
    {
        return view('auth');
    }

    public function show(int $id)
    {
       return "Новость с ID = ".$id;
    }

    public function addNews()
    {
        return view('addNews');
    }

    public function showSport()
    {
        $news = $this->getNews();
        return view('news/newsCat/Sport', [
            'newsList' => $news
        ]);
    }

    public function showEconomy()
    {
        $news = $this->getNews();
        return view('news/newsCat/Economy', [
            'newsList' => $news
        ]);
    }

    public function showSociety()
    {
        $news = $this->getNews();
        return view('news/newsCat/Society', [
            'newsList' => $news
        ]);
    }

    public function showLaw()
    {
        $news = $this->getNews();
        return view('news/newsCat/Law', [
            'newsList' => $news
        ]);
    }

    public function showWeather()
    {
        $news = $this->getNews();
        return view('news/newsCat/Weather', [
            'newsList' => $news
        ]);
    }

}
