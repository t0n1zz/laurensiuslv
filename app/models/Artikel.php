<?php

class Artikel extends \Eloquent {

	protected $table = 'Artikel';

	// Add your validation rules here
	public static $rules = [
		 'judul' => 'required|between:5,255',
		 'content' => 'required',
		 'gambar' => 'image|mimes:jpeg,jpg,png,bmp'

	];

	// Don't forget to fill this array
	protected $fillable = ['judul','content','kategori','status','gambar'];

	public function kategoriartikel(){
		return $this->belongsTo('KategoriArtikel','kategori', 'id'); 
	}
}