<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	// use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'address_id' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'first_name',
		'last_name',
		'role_id',
		'contact_id',
		'email_id',
		'address_id',
		'created_by',
		'updated_by',
		'deleted_by'
	];
}
