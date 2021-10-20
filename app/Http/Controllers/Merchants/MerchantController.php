<?php

namespace App\Http\Controllers\Merchants;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Hash;
use Auth;
use Inertia\Inertia;
use App\Models\Merchant;
use App\ReceivePayment\ReceivePayment;
use Illuminate\Support\Facades\Crypt;

class MerchantController extends Controller
{

    public function __construct(){
        $this->middleware('auth:merchants');
    }

    public function index(){
        Inertia::setRootView('merchant');
        return Inertia::render('Merchants/Dashboard');
    }

    
    //
    public function getPaymentForMerchant(Request $request, $merchant_address){
      
            dd($merchant_address);
    }


    public function receivePayment(){

        $user = Auth::guard('merchants')->user();
        // $guid = $user->merchant_address;        
        $rp = new ReceivePayment($user->password.''.$user->email);
       
        $result = $rp->sendRequest();

        $encrypted_guid = Crypt::encryptString($result->guid);
        $encrypted_xpub = Crypt::encryptString($result->address);

        $user->guid = $encrypted_guid;
        $user->xpub = $encrypted_xpub;

        if($user->save()){
            return response()->json([
                'status' => 'success',
                'message' => 'xPub Account created'
             ]);
        };
    }
}