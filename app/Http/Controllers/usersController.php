<?php

namespace App\Http\Controllers;

use App\users;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class usersController extends Controller
{
    public function index($id = null) {
        if ($id == null) {
            return users::orderBy('id', 'asc')->get();
        } else {
            return $this->show($id);
        }
    }

    public function store(Request $request) {
        $user = new users;

        $user->password = $request->input('password');
        $user->last_login = $request->input('last_login');
        $user->access_type = $request->input('access_type');
        $user->date_created = $request->input('date_created');
        $user->date_modified = $request->input('date_modified');
        $user->save();

        return 'User record successfully created with id ' . $user->id;
    }

    public function show($id) {
        return users::find($id);
    }

    public function update(Request $request, $id) {
        $user = users::find($id);

        $user->password = $request->input('password');
        $user->access_type = $request->input('access_type');

        $user->save();

        return "Success updating user #" . $user->id;
    }

    public function destroy(Request $request) {
        $user = users::find($request->input('id'));

        $user->delete();

        return "user record successfully deleted #" . $request->input('id');
    }
}
