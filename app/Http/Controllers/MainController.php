<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public static function home() {
        return view('pages.home');
    }

    public static function courses() {
        return view('pages.courses');
    }

    public static function departments() {
        return view('pages.departments');
    }

    public static function contact() {
        return view('pages.contact');
    }
}