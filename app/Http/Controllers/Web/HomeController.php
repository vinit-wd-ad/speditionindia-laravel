<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $industries = [
            ['title' => 'Automotive Industry', 'img' => '/images/industries/Automotive.jpg'],
            [
                'title' => 'Electronics & High-Tech',
                'img' => '/images/industries/electronics-high-tech.jpg',
            ],
            ['title' => 'Textiles & Apparel', 'img' => '/images/industries/textiles-apparel.jpg'],
            ['title' => 'Food & Beverages', 'img' => '/images/industries/food-beverages.jpg'],
            ['title' => 'Retail & E-Commerce', 'img' => '/images/industries/retail-e-commerce.jpg'],
            ['title' => 'Agriculture & FMCG', 'img' => '/images/industries/agriculture-fmgc.jpg'],
            ['title' => 'Pharma & Healthcare', 'img' => '/images/industries/pharma&healthcare.jpg'],
            [
                'title' => 'Chemicals & Petrochemicals',
                'img' => '/images/industries/chemicals-petrochemicals.jpg',
            ],
            ['title' => 'Heavy Engineering', 'img' => '/images/industries/heavy-engineering.jpg'],
        ];

        return view('home', compact('industries'));
    }
}
