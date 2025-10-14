<?php

namespace App\Http\Controllers;

class NewsController extends Controller
{
    public function index()
    {
        return view('pages.news.index');
    }

    public function kuliner()
    {
        return view('pages.news.kuliner');
    }

    public function romantisme()
    {
        return view('pages.news.romantisme');
    }

    public function holidays()
    {
        return view('pages.news.holidays');
    }

    public function coffeeshop()
    {
        return view('pages.news.coffeeshop');
    }

    public function master()
    {
        return view('pages.news.master');
    }

    public function wisata()
    {
        return view('pages.news.wisata');
    }
}
