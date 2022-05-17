<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class playlist extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function user()
    {
        return $this->belongsTo(user::class, 'user_id');
    }

    public function video()
    {
        return $this->hasMany(video::class);
    }

    public function review()
    {
        return $this->hasMany(review::class);
    }
    public function transaksi()
    {
        return $this->hasMany(transaksi::class);
    }
}
