<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public static function home() {
        if (Auth::check()) {
        // Usuário está logado
        return redirect()->route('dashboard');
        }

        // Usuário não está logado
        return redirect()->route('register');
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