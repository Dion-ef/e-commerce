<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class barang extends Model
{
    use HasFactory;
    protected $table = "barang";
    protected $guarded =[];

    public function kategori()
    {
        return $this->belongsTo('App\Models\kategori');
    }
}
