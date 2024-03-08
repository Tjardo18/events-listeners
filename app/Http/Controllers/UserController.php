<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserUpdated;

class UserController extends Controller
{
    public function update(Request $request, User $user)
    {
        $user->update($request->all());

        Mail::to($user->email)->send(new UserUpdated($user));

        return redirect()->route('users.index');
    }
}
