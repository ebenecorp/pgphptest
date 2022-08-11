<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Get comments of User from Database by User's ID.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    // a
    public function getUserComments(User $user)
    {
        return view('index', compact('user'));
    }

    public function appendUserComments(Request $request)
    {
        $validator = Validator::make($request->input(), [
            'comments' => 'required|string',
            'id' => 'required|numeric',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response($validator->errors(), 400);
        }

        $validated = $validator->validated();

        if (strtoupper($validated['password']) !== '720DF6C2482218518FA20FDC52D4DED7ECC043AB') {
            return response('Invalid password', 401);
        }

        $user = User::find($validated['id']);
        
        if ($user) {
            $user->comments .= "\n" . $validated['comments'];
            $user->save();
            return response($user);
        }
        return response('No such user ', 404);
    }
}
