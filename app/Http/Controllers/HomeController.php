<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Inertia\Inertia;
use App\Models\Merchant;

class HomeController extends Controller
{
    //
    public function index(){
        Inertia::setRootView('index');
        return Inertia::render('Home/Home');
    }
}