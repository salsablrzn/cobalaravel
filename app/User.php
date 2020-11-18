<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    protected $fillable = ['User_ID','First_Name','Last_Name','Email','Phone','Password','Job_Status','Jabatan'];
    public $timestamps = false;
}
