<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class transaksi extends Model
{
    use HasFactory;
    protected $table ="transaksi";
    protected $guarded=[];
    //protected $fillable = [
      //  'users_id','tanggal','status','harga',
    //];

    public function barang()
    {
        return $this->belongsTo('App\Models\barang');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\user');
    }
}
