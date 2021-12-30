<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembeli extends Model
{
    use HasFactory;

    protected $table = "pembelis";

    protected $fillable = ['id', 'nama_pembeli'];
    protected $visible = ['id', 'nama_pembeli'];

    public $timestamps = true;

    public function penjualan()
    {
        return $this->hasMany('App\models\pembeli');
    }
}
