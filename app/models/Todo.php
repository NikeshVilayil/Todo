<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model {
	protected $table = 'todo';

	public function __construct() {

	}	

	public function users() {
		return $this->belongsTo('Users', 'user_id');
	}
}