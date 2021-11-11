<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function UserView(){
        $allData = User::all();
        return view('backend.user.view_user', compact('allData'));

    }

    public function UserAdd(){
        return view('backend.user.add_user');
    }

    public function UserStore(Request $request){

        $validateData = $request->validate([
            'email' => 'required|unique:users',
            'name' => 'required',
        ]);
        $data = new User();
        $data->usertype = $request->usertype;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();

        return redirect()->route('user.view');
    }

    public function UserEdit($id){
        $editData = User::find($id);
        return view('backend.user.edit_user', compact('editData'));
    }

    public function UserUpdate(Request $request, $id){

        $user = User::find($id);
        $user->usertype = $request->usertype;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('user.view');
    }

    public function UserDelete($id){

        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.view');

    }



}
