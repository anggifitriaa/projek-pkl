<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    use HasFactory;

    protected $table = "penjualan";

    protected $fillable = ['no_meja', 'tgl_penjualan', 'jumlah_menu', 'total', 'id_pembeli', 'id_karyawan', 'id_menu'];
    protected $visible = ['no_meja', 'tgl_penjualan', 'jumlah_menu', 'total', 'id_pembeli', 'id_karyawan', 'id_menu'];

    public $timestamps = true;

    public function pembeli()
    {
        return $this->hasMany('App\models\pembeli', 'id_pembeli');
    }

    public function karyawan()
    {
        return $this->hasMany('App\models\pembeli', 'id_karyawan');

    }

    public function menu()
    {
        return $this->hasMany('App\models\pembeli', 'id_menu');

    }
}
