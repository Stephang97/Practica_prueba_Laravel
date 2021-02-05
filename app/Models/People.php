<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{

    public  $fillable = [
        'nameUser',
        'nameFull',
        'email',
        'cellphone',
        'age',
        'dateBorn'
    ];
    
    public function role(){
        return $this-> hasMany(Role::class);
    }

    public function configuration(){
        return $this-> hasOne(Configuration::class);
    }
}
