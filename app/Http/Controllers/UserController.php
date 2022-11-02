<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        return view('profile.index');
    }
    public function store(Request $request){
        $user_id = auth()->user()->id;
        User::where('id', $user_id)->update([
            'address' => request('address'),
            'phone_number' => request('phone_number'),
            'resume' => request('resume')
        ]
        );
        return redirect()->back()->with('message', 'Updated');
    }
}
