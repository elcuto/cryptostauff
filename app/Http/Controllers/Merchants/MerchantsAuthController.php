<?php

namespace App\Http\Controllers\Merchants;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Hash;
use Auth;
use Inertia\Inertia;
use App\Models\Merchant;

class MerchantsAuthController extends Controller
{
    //
    public function login(){
        Inertia::setRootView('merchant');
         return Inertia::render('Merchants/Login');
    }

    public function loginMerchant(Request $r){
       $validator = Validator::make($r->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
            $credentials = [
                'email' => $r->email,
                'password' => $r->password
            ];
            if(Auth::guard('merchants')->attempt($credentials)) {
                $r->session()->regenerate();
                return response()->json([
                    'status' => 'success',
                    'url' => redirect()->intended('/merchants/dashboard')->getTargetUrl()
                ]);
                
            }else{
                 return response()->json([
                     'status' => 'error',
                     'message' => 'Invalid login credentials'
                 ]);
            }
    }

    /**
     * MERCHANT SIGN UP
     */
    public function register(){
        Inertia::setRootView('merchant');
        return Inertia::render('Merchants/SignUp');
    }

    public function registerMerchant(Request $r){
         $validator = Validator::make($r->all(), [
            'phoneno' => 'required|unique:merchants',
            'email' => 'required|unique:merchants',
            'firstname' => 'required',
            'lastname' => 'required',
            'shopname' => 'required',
            'password' => 'required',
            'confirmpassword' => 'same:password',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }

        //create record
        $user = new Merchant();
        $user->firstname = $r->firstname;
        $user->lastname = $r->lastname;
        $user->shopname = $r->shopname;
        $user->email = $r->email;
        $user->merchant_guid = Str::uuid()->toString();
        $user->phoneno = $r->phoneno;
        $user->password = Hash::make($r->password);
        
        if($user->save()){
            $credentials = [
                'email' => $r->email,
                'password' => $r->password
            ];
            if(Auth::guard('merchants')->attempt($credentials)) {
                $r->session()->regenerate();
                return response()->json([
                    'status' => 'success',
                    'url' => redirect()->intended('/merchants/dashboard')->getTargetUrl()
                ]);
                
            }else{
                 return response()->json([
                    'status' => 'success',
                    'url' => redirect()->intended('/')->getTargetUrl()
                ]);
            }
        }else{
            return response()->json([
                'status' => 'error',
                'message' => 'Unable to create account',
            ], 200);
        }
    }

    public function signOut(){
        Auth::guard('merchants')->logout();
        return redirect()->to('/merchants/sign-in');
    }

}