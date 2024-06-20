<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tgl_checkin',
        'tgl_checkout',
        'tgl_pesanan',
        'id_pemesan',
        'id_kamar',
    ];

    protected $casts = [
        'tgl_checkin' => 'datetime',
        'tgl_checkout' => 'datetime',
        'tgl_pesanan' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_pemesan');
    }

    public function kamar()
    {
        return $this->belongsTo(Kamar::class, 'id_kamar');
    }
}
