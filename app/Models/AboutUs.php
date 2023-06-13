<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class AboutUs extends Model
{
	use Translatable; 

	protected $table = 'about_us';
	public $timestamps = true;
	protected $fillable = array('image', 'is_activate', 'added_by', 'edited_by', 'section');
    protected $translatedAttributes = ['name', 'title', 'description'];
    protected $hidden = ['translations'];

	public function scopeActive($query){
		return $query->where('is_activate', 1);
	}

}
