<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    use HasFactory;
    protected $table = "karyawan";

    protected $fillable = ['id', 'nama_karyawan'];
    protected $visible = ['id', 'nama_karyawan'];

    public $timestamps = true;

    public function penjualan()
    {
        return $this->hasMany('App\models\karyawan');
    }
}
