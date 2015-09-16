<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model {
	protected $table = 'comments';

	public function __construct() {

	}	

	public function todo() {
		return $this->belongsTo('Todo', 'todo_id');
	}
	
	public function users() {
		return $this->belongsTo('Users', 'user_id');
	}
}