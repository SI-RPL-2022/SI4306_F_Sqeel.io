<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function playlist()
    {
        return $this->belongsTo(playlist::class, 'playlist_id');
    }

    public function transaksi()
    {
        return $this->hasMany(transaksi::class);
    }

    public function komentar()
    {
        return $this->hasMany(komentar::class);
    }
}
