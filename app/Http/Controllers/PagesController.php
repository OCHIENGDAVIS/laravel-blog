<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view("pages.index", ['name' => "davis",]);
    }
    public function about()

    {
        $title = 'Something weired';
        return view('pages.about', compact('title'));
    }
    public function services()
    {
        return view('pages.services');
    }
}
