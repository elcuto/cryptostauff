<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Hash;
use Auth;
use Inertia\Inertia;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * LOGIN ROUTES
     */
    public function login(){
        Inertia::setRootView('auth');
           return Inertia::render('App/Login', [
        ]);
    }

    public function loginUser(Request $r){
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
            if(Auth::attempt($credentials)) {
                $r->session()->regenerate();
                return response()->json([
                    'status' => 'success',
                    'url' => redirect()->intended('/dashboard')->getTargetUrl()
                ]);
                
            }else{
                 return response()->json([
                     'status' => 'error',
                     'message' => 'Invalid login credentials'
                 ]);
            }
    }

    /**
     * REGISTER NEW USER ROUTES
     */
    public function register(){
        Inertia::setRootView('auth');
           return Inertia::render('App/Register', [
        ]);
    }

    public function saveUser(Request $r){
        $validator = Validator::make($r->all(), [
            'phoneno' => 'required|unique:users',
            'email' => 'required|unique:users',
            'fullname' => 'required',
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
        $user = new User();
        $user->fullname = $r->fullname;
        $user->email = $r->email;
        $user->phoneno = $r->phoneno;
        $user->password = Hash::make($r->password);
        
        if($user->save()){
            $credentials = [
                'email' => $r->email,
                'password' => $r->password
            ];
            if(Auth::attempt($credentials)) {
                $r->session()->regenerate();
                return response()->json([
                    'status' => 'success',
                    'url' => redirect()->intended()->getTargetUrl()
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
    
    /**
     * FORGOT PASSWORD
     */
    public function forgotPassword(){
        Inertia::setRootView('auth');
        return Inertia::render('App/ForgotPassword', [
        ]);
    }


    /**
     * SIGN OUT USER
     */
    public function logout(){
        Auth::logout();
        return redirect()->to('/');
    }
}