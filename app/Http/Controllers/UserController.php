<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],  
          'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
        $user = new User();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);

        $user->save();
        return redirect()->back()->with('status', 'User Added Sucessfully.');
    }

    public function view($id)
    {
        $user = User::where('id', $id)->first();
        return view('view-kpXZbznHlU', ['user' => $user]);
    }

    public function update(Request $request)
    {
        
        $this->validate($request, [
            'id' => ['required'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
        $user = new User();
        $user->password = Hash::make($request['password']);;



        $data = array(
            'password' => $user->password,
        );
        User::where('id', $request['id'])->update($data);
        return redirect()->back()->with('status', 'User Password Update Sucessfully.');
    }
}
