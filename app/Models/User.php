<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\category;
class user extends Authenticatable
{
    use HasFactory;
    protected $table ="users";
    protected $primarykey ="id";
    protected $fillable = ['name', 'username', 'id_group', 'email', 'password', 'id_jabatan',  'gambar'];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    
   
}
