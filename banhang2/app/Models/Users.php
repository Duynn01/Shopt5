<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table = 'accout_user';

    public  $timestap = false;
    
    protected $fillable = [
        'name',
        'password',
    ];
}
