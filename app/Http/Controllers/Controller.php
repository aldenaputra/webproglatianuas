<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function adminIndex()
    {
        return view('admin.index');
    }

    public function userIndex()
    {
        return view('user.index');
    }

    public function maintenance()
    {
        $users = User::all();
        return view('admin.accmaintenance', compact('users'));
    }

    public function deleteuser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back();
    }

    public function updaterole($id)
    {
        $user = User::findOrFail($id);
        if($user->role == 'Admin'){
            $user->role = 'User';
        }
        else{
            $user->role = 'Admin';
        }

        $user->save();

        return redirect()->back();
    }
}
