<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $fillable = ['fname', 'lname', 'email', 'subject', 'message'];
}
