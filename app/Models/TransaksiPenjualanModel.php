<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class TransaksiPenjualanModel extends Model
{
    use HasFactory;

    protected $table = 't_penjualan'; //mendefiniskan nama tabel yang digunakan oleh model ini
    protected $primaryKey = 'penjualan_id'; //mendefiniskan primary key dari tabel yang digunakan

    protected $guarded = [
        'penjualan_id'
    ];

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($image) => url('/storage/posts/' . $image),
        );
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(UserModel::class, 'user_id', 'user_id');
    }
}