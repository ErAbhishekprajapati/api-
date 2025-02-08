<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\view;
use Illuminate\Support\Facades\Http;// http call krni padegi api ke liye;
//use App\Models\User;

class UserController extends Controller
{
    // //
    // function getUser(){
    //    return " Hi abhishek ji123";}
    
    // function userHome(){
    //     $name="Anil";
    //     $user=['anil','kumar','shyam'];
    //     return view('first',["name"=>$name,"user"=>$user]);
    // }

    // function index()

    // {
    //     // Database se data fetch karna
    //     $users = User::all();
    //     return view('first', compact('users'));
    // }

    // how to call api in laravel
    // sabse pahle web.php me uska route define karenge=Route::get('users', [UserController::class, 'getdata']); like this

    // uske bad ye UserController.php me banayenge function;
//     function getdata(){
//         $response = Http::get('https://www.w3schools.com/dsa/dsa_intro.php');
//         $response= $response->status();
//         return view('first',['data'=>json_decode($response)]);

//     }
 }

// function getcss(){
//     return view('css.style');
// }
