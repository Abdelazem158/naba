<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model implements TranslatableContract
{
	use Translatable;

	protected $table = 'sliders';
	public $timestamps = true;
	protected $fillable = array('is_activate');
    protected $translatedAttributes = ['title', 'description', 'link', 'image', 'image_phone'];
    protected $hidden = ['translations'];

	public function scopeActive($query){
		return $query->where('is_activate', 1);
	}
}
