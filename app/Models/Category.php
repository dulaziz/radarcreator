<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
class category extends Authenticatable
{
    use HasFactory;
    protected $fillable = ['id', 'group_user'];
   
    
    public function getIncrementing()
    {
        return false;
    }    

    public function getKeyType()
    {
        return 'string';
    }

   
}
