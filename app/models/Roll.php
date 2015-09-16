<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roll extends Model {
	protected $table = 'roll';

	public function __construct() {

	}	

	public function users() {
		return $this->hasMany('Users', 'id')
	}
}