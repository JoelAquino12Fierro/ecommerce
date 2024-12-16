<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class users_tableController extends Controller
{
    public function index(){
        
        $users = User::all();
        return view('users_table', compact('users')); 
    }
}
