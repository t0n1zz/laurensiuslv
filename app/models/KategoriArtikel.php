<?php

class KategoriArtikel extends \Eloquent {
	
	protected $table = 'kategori_artikel';

	// Add your validation rules here
	public static $rules = [
		'name' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['name'];

	public function artikel(){
		return $this->hasMany('Artikel');
	}

}