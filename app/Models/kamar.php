<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{
    use HasFactory;

    protected $fillable = [
        'status_kamar',
        'jenis_kamar',
        'harga_kamar',
    ];

    /**
     * Get the pesanan that owns the kamar.
     */
    public function pesanan()
    {
        return $this->hasMany(Pesanan::class, 'id_kamar');
    }
}
