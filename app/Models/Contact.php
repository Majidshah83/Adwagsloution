<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    //uuid convert to string
     protected $casts=[
         'uuid'=>'string',
     ];
    protected $fillable = ['name', 'uuid','email','company','help_message'];

}