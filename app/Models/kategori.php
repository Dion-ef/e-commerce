<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class kategori extends Model
{
    use HasFactory;

    protected $table="kategori";
    protected $guarded=[];
    protected $fillable = [
        'nama_kategori',
    ];

  

}
