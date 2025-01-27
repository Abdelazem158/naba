<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SliderTranslation extends Model {

	protected $table = 'slider_translations';
	public $timestamps = true;
	protected $fillable = array('slider_id', 'title', 'description', 'link', 'image', 'image_phone');

}
