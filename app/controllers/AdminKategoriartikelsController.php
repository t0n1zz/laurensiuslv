<?php

class AdminKategoriartikelsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /kategoriartikels
	 *
	 * @return Response
	 */
	public function index()
	{
		$kategori_artikels = KategoriArtikel::all();
        return View::make('admins.kategoriartikels.index', compact('kategori_artikels'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /kategoriartikels/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admins.kategoriartikels.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /kategoriartikels
	 *
	 * @return Response
	 */
	public function store()
	{
        $validator = Validator::make($data = Input::all(), KategoriArtikel::$rules);

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }
        $name = Input::get('name');

        if(KategoriArtikel::create($data))
            return Redirect::route('admins.kategoriartikels.index')->with('message', 'Kategori Artikel <b>' .$name. '</b> Telah berhasil ditambah.');

        return Redirect::back()->withInput()->with('errormessage','Terjadi kesalahan dalam penambahan kategori artikel.');
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /kategoriartikels/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $kategori_artikels = KategoriArtikel::find($id);

        return View::make('admins.kategoriartikels.edit',compact('kategori_artikels'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /kategoriartikels/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
        //validasi
        $validator = Validator::make($data = Input::all(), KategoriArtikel::$rules);
        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $name = Input::get('name');
        $id = Input::get('id');
        $kategori_artikel = KategoriArtikel::findOrFail($id);

        //simpan
        if($kategori_artikel->update($data))
            return Redirect::route('admins.kategoriartikels.index')->with('message', 'Kategori artikel  <b>' .$name. '</b> Telah berhasil diubah.');

        return Redirect::back()->withInput()->with('errormessage','Terjadi kesalahan dalam pengubahan kategori artikel.');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /kategoriartikels/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
        $id = Input::get('id');
        $artikels = Artikel::find($id);

        if(is_null($artikels)) {
            KategoriArtikel::destroy($id);
            return Redirect::route('admins.kategoriartikels.index')->with('message', 'Kategori artikel telah berhasil di hapus.');
        }

        return Redirect::back()->withInput()->with('errormessage','Terdapat artikel pada kategori ini, silahkan ganti terlebih dahulu.');
	}

}