<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller {
    public function index() {
        $users = User::all()->toArray();
        return array_reverse($users);
    }
    public function store(Request $request) {
        $user = new User(['name' => $request->input('name'), 'email' => $request->input('email'), 'password' => $request->input('password') ]);
        $user->save();
        return response()->json('User created!');
    }
    public function show($id) {
        $user = User::find($id);
        return response()->json($user);
    }
    public function update($id, Request $request) {
        $user = User::find($id);
        $user->update($request->all());
        return response()->json('User updated!');
    }
    public function destroy($id) {
        $user = User::find($id);
        $user->delete();
        return response()->json('User deleted!');
    }
}