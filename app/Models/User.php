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
    protected $fillable = ['name', 'uuid', 'username', 'group', 'email', 'password', 'jabatan', 'id_role', 'gambar'];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    
    public function getIncrementing()
    {
        return false;
    }    

    public function category()
    {   
return $this->belongsTo(Category::class);
    }
}
