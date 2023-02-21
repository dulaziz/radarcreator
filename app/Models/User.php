<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
class user extends Authenticatable
{
    use HasFactory;
    protected $table ="users";
    protected $primarykey ="id";
    protected $fillable = ['name', 'username', 'group', 'email', 'password', 'jabatan', 'role', 'gambar'];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    
}
