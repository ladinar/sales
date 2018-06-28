<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HRCrud extends Model
{
	protected $table = 'users';
	protected $primaryKey = 'nik';
	protected $fillable = ['employees_name', 'email', 'password', 'company', 'division', 'position', 'date_of_entry', 'date_of_birth', 'address', 'phone_number'];
	public $timestamps = false;
}
