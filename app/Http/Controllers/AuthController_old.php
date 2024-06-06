<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    // Register
    public function register(Request $request){
        // GET + POST
        //echo "<h1>Register Method</h1>";

        if($request->isMethod("post")){

            $request->validate([
                "name" => "required|string",
                "email" => "required|email|unique:users",
                "phone" => ["required", "unique:users", "regex:/^(\+?\d{9,15})$/"],
                "password" => "required"
            ]);

            User::create([
                "name" => $request->name,
                "email" => $request->email,
                "password" => bcrypt($request->password),
                "phone" => $request->phone
            ]);

            // Redirect auto login to dashboard
            if(Auth::attempt([
                "email" => $request->email,
                "password" => $request->password
            ])){

                return to_route('dashboard');
            }else{

                return to_route('register');
            }

        }

        return view("auth.register");
    }

    // Login
    public function login(Request $request){
        // GET + POST
        //echo "<h1>Login Method</h1>";
        if($request->isMethod("post")){

            $request->validate([
                "email" => "required|email",
                "password" => "required"
            ]);

            if(Auth::attempt([
                "email" => $request->email,
                "password" => $request->password
            ])){

                return to_route("dashboard");
            }else{

                return to_route("login")->with("error", "Invalid login details");
            }
        }
        return view("auth.login");
    }

    // Dashboard
    public function dashboard(){
        // After Login
        //echo "<h1>Dashboard Method</h1>";
        return view("dashboard");
    }

    // Profile
    public function profile(Request $request){
        // After Login
        //echo "<h1>Profile Method</h1>";
        if($request->isMethod("post")){

            $request->validate([
                "name" => "required|string",
                "phone" => "required"
            ]);

            $id = auth()->user()->id; // Logged In userID

            $user = User::findOrFail($id);

            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->save();

            return to_route("profile")->with("success", "Successfully, profile updated");
        }

        return view("profile");
    }

    // Logout
    public function logout(){
        // After Login
        Session::flush();

        Auth::logout();

        return to_route("login")->with("success", "Logged out successfully");
    }
}
