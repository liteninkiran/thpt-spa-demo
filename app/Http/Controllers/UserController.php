<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getUsers() {
        return response()->json(User::all(), 200);
    }

    public function getUser($id) {
        $user = User::find($id);

        if(is_null($user)) {
            return response()->json(['message' => 'User Not Found'], 404);
        }

        return response()->json($user, 200);
    }

    public function createUser(Request $request) {
        $user = User::create($request->all());
        return response($user, 201);
    }

    public function updateUser(Request $request, $id) {
        $user = User::find($id);

        if(is_null($user)) {
            return response()->json(['message' => 'User Not Found'], 404);
        }

        $user->update($request->all());
        return response()->json($user, 200);
    }
}
