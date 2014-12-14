<?php

class AdminUsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();

        return View::make('admins.users.index', compact('users'));
	}


	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);

        return View::make('admins.users.edit', compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        if(Input::get('simpan')) {
            //validasi
            $validator = Validator::make($data = Input::all(), User::$auth_rules);
            if ($validator->fails()) {
                return Redirect::back()->withErrors($validator)->withInput();
            }

            $name = Input::get('name');
            $user = User::findOrFail($id);

            $user->name = $name;
            $user->username = Input::get('username');
            $oldpassword = $user->password;
            $oldpassword2 = Input::get('oldpassword');
            if (Hash::check($oldpassword2, $oldpassword)) {
                $user->password = Hash::make(Input::get('password'));
                //simpan
                if ($user->update())
                    return Redirect::route('admins.users.index')->with('message', 'Informasi Admin  <b>' . $name . '</b> Telah berhasil diubah.');
            } else {
                return Redirect::back()->withInput()->with('errormessage', 'Password lama anda tidak sesuai.');
            }

            return Redirect::back()->withInput()->with('errormessage', 'Terjadi kesalahan dalam pengubahan informasi admin.');
        }elseif(Input::get('batal')){
            return Redirect::route('admins.users.index');
        }
	}


}