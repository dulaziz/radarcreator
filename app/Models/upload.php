<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class upload extends Model
{
    use HasFactory;
    protected $table ="tb_upload";
    protected $primarykey ="id_upload";
    protected $fillable = ['tanggal', 'id_group', 'video_title', 'video', 'produksi', 'name', 'platform'];
    protected $hidden = [
        'remember_token',
    ];

}
