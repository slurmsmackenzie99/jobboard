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
        $this->validate($request, [
            'phone_number' => 'required|min:9|numeric',
            'address' => 'required'
        ]);

        $user_id = auth()->user()->id;
        User::where('id', $user_id)->update([
            'address' => request('address'),
            'phone_number' => request('phone_number')
        ]
        );
        return redirect()->back()->with('message', 'Profile updated');
    }

    public function resume(Request $request){
        $this->validate($request, [
            'resume' => 'required|mimes:pdf,doc,docx, png, jpg|max:20000'
        ]);
        $user_id = auth()->user()->id;
        $resume = $request->file('resume')->store('public/files');
        User::where('id', $user_id)->update([
            'resume' => $resume
        ]
        );
        return redirect()->back()->with('message', 'Resume updated');
    }
}
