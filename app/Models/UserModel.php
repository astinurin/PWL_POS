<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticable;

use Illuminate\Database\Eloquent\Casts\Attribute;

class UserModel extends Authenticable implements JWTSubject
// class UserModel extends Model
{
    // use HasFactory;
    
    public function getJWTIdentifier(){
        return $this->getKey();
        // return 'user_id';
    }

    public function getJWTCustomClaims(){
        return [];
    }


    protected $table = 'm_user'; // Mendefinisikan nama tabel yang digunakan oleh model ini
    protected $primaryKey = 'user_id'; // Mendefinisikan primary key dari tabel yang digunakan

    //mendaftarkan atribut(nama kolom) yang bisa kita isi ketika melakukan insert/update ke database
    // protected $fillable = ['level_id', 'username', 'nama', 'password'];
    protected $fillable = ['level_id', 'username', 'nama', 'password', 'image'];

    public function level(): BelongsTo{
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($image) => url('/storage/posts/' . $image),
        );
    }
    

    // public function stok(): HasMany
    // {
    //     return $this->hasMany(StokModel::class, 'user_id', 'user_id');
    // }

    // public function transaksi(): HasMany
    // {
    //     return $this->hasMany(TransaksiPenjualanModel::class, 'user_id', 'user_id');
    // }
}