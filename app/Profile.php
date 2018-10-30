<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\Profile as Authenticatable;

class Profile extends Model
{
	 use Notifiable;
	 use softDeletes;
    //
	protected $fillable = ['firstname','lastname','middlename','gender','address','user_id'];
}
