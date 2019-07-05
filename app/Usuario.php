<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = ['email','password'];
    public $timestamps = true;


    public function getAll(){
        $user = self::all();
        return $user;
    }
}
