<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Inertia\Inertia;
use App\Models\Currency;

class BuySellCryptoController extends Controller
{
    /**
     * BUY CRYPTO ROUTES
     */
    public function buySell(){
        $currencies = Currency::all();
        return Inertia::render('App/BuySell', [
            'currencies'=>$currencies
        ]);
    }
}