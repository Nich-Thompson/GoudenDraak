<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Dish;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function contact()
    {
        return view('contact');
    }

    public function news()
    {
        return view('news');
    }

    public function menu()
    {
        return view('menu');
    }

    public function downloadMenu()
    {
        $categories = Category::with("dishes")->get();

        $pdf = PDF::loadView('download-menu', ["categories" => $categories]);
        return $pdf->stream('download-menu.pdf');

//        return view('download-menu', ["categories" => $categories]);
    }
}
