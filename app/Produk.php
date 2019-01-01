<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produk extends Model
{
     // Digunakan untuk menggunakan soft delete secara default saat menghapus data
    use SoftDeletes;
 
    protected $fillable = [
        'nama', 'deskripsi'
    ];
    protected $dates = ['deleted_at'];
}
