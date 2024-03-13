<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'm_user'; //mendefinisikan nama tabel yang digunakan oleh model
    protected $primaryKey = 'user_id'; //mendefinisikan primary Key dari tabel yang digunakan 

    
    // protected $fillable = ['level_id', 'username', 'nama', 'password'];
    protected $fillable = ['level_id', 'username', 'nama', 'password'];
}
