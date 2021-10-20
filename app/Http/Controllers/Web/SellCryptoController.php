<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Inertia\Inertia;

class SellCryptoController extends Controller
{
    /**
     * SELL CRYPTO ROUTES
     */
    public function sell(){
        return Inertia::render('App/Sell', [
        ]);
    }
}