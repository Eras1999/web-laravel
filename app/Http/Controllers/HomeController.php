<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredItems = [
            [
                'title' => 'Welcome to Our Website',
                'description' => 'Discover amazing content and services.',
                'image' => 'feature1.jpg'
            ],
            [
                'title' => 'Our Services',
                'description' => 'Professional solutions for your needs.',
                'image' => 'feature2.jpg'
            ],
            [
                'title' => 'Contact Us',
                'description' => 'Get in touch with our team.',
                'image' => 'feature3.jpg'
            ]
        ];
        
        return view('home', compact('featuredItems'));
    }


    public function about()
{
    return view('about');
}

public function services()
{
    $services = [
        [
            'title' => 'Web Development',
            'description' => 'Custom website development using modern technologies',
            'icon' => 'code'
        ],
        [
            'title' => 'Mobile Apps',
            'description' => 'Native and cross-platform mobile application development',
            'icon' => 'smartphone'
        ],
        [
            'title' => 'Cloud Solutions',
            'description' => 'Cloud infrastructure and deployment services',
            'icon' => 'cloud'
        ]
    ];
    return view('services', compact('services'));
}

public function contact()
{
    return view('contact');
}
}
