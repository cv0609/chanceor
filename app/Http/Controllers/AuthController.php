<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Mail\UserRegisterMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
   public function login()
    {
       return view('front_end.auth.login');
    }
   public function loginPost(LoginRequest $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

           if(Session::has('myTeam')){

                $getMyTeam = Session::get('myTeam');
                    
                if (count($getMyTeam) == 5) {
                    $url = route('my-team');
                   return redirect()->route('my-team')->with('success','You are login successfully!');
                    // return response()->json([
                    //     'error' => false,
                    //     'message' => 'You are login successfully!',
                    //     'url' => $url
                    // ]);
                }

            }else{
                return redirect()->route('home')->with('success','You are login successfully!');

                // return response()->json([
                //     'error' => false,
                //     'message' => 'You are login successfully!'
                // ]);
            }  
        }else{
            return redirect()->back()->with('error','Please enter valid email password!');

            // return response()->json([
            //     'error' => true,
            //     'message' => 'Please enter valid email password!'
            // ]);
        }
    }
   public function register()
    {
        return view('front_end.auth.register');
    }

   public function save(RegisterRequest $request)
    {
        $user = new User();
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->password = Hash::make($request->input('password')); // Hash the password
        $user->save();

        if(isset($user) && !empty($user)){

            $user = [
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'email' => $request->input('email'),
                'password' => $request->input('password'),
                'phone' => $request->input('phone')
            ];

            // Mail::to($request->input('email'))->send(new UserRegisterMail($user));
        }

        return redirect()->back()->with('success','You are registered successfully!'); 
        //return redirect()->json(['error' => false , 'message' => 'You are sign up successfully!']);
    //     return response()->json([
    //         'error' => false,
    //         'message' => 'You are sign up successfully!'
    //     ]);
     }

    public function logout()
    {
        Session::flush();
        return redirect()->route('home');
    }
}

