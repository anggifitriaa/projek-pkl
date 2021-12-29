<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_menu', 'harga', 'stock'];
    protected $visible = ['id', 'nama_menu', 'harga', 'stock'];

    public $timestamps = true;

    public function penjualan()
    {
        return $this->hasMany('App\models\menu');
    }

}
