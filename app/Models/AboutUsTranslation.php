<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUsTranslation extends Model {

	protected $table = 'about_us_translations';
	public $timestamps = true;
	protected $fillable = array('title', 'description', 'about_us_id');

}