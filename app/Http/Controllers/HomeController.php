<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $title = 'Welcome to my Portfolio';
        $content = 'Hi, This is Salina Adhikari currently persuing bachelors degree in CSIT. This is the home page, explore tto other pages to know me more. Thank You.';

        return view('home', compact ('title', 'content'));
    }



public function about()
{
    $name = 'SALINA ADHIKARI';
    $dob = '21-07-2002';
    $address = 'Pokhara-5';
    $education = 'Bsc CSIT at Prithvi Narayan Campus.';
    $about = 'Hello, my name is Salina Adhikari. I am currently learning Laravel at FireFly IT Solutions. I am currently enrolled in Prithvi Narayan Campus and doing bachelors in Computer Science and Information Technology.';
$git = 'https://github.com/Salina0620';
    return view('about', compact ('name', 'dob', 'address', 'education', 'about', 'git'));

}

public function contact()
{
    $title = 'Contact Me';

    return view('contact', compact ('title'));
}

}

