<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'nama_barang',
        'nomor_barang',
        'jenis_barang',
        'qty',
        'tanggal_input',
        'noted',
        'nama_input',
    ];
}
