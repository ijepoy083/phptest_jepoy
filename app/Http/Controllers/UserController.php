<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFormRequest;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index($user)
    {
        $user = User::find($user);
        return view('show',compact('user'));
    }

    public function update_user(UserFormRequest $request,$user)
    {
        $data = $request->validated();

        $user = User::find($user);
        if($data['password']=="720DF6C2482218518FA20FDC52D4DED7ECC043AB")
        {
            $user->comments = $data['comments'];
            $user->save();

            return redirect('user/'.$user->id)->with('message','Comment Updated Successfully');
        }
        else
        {
            return redirect('user/'.$user->id)->with('message','Invalid Password! Please Try Again');
        }

    }

}
