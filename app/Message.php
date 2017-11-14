<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
	//Para la asignación masiva
    protected $fillable = ['nombre', 'email', 'mensaje'];
}
