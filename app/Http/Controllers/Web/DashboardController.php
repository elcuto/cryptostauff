<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
USE Inertia\Inertia;

class DashboardController extends Controller
{
    /**
     * DASHBOARD
     */
    public function index(){
        return Inertia::render('App/Dashboard', [
        ]);
    }

}