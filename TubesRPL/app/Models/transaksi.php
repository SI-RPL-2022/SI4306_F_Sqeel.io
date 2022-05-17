<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function video()
    {
        return $this->belongsTo(video::class, 'video_id');
    }
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function playlist()
    {
        return $this->belongsTo(playlist::class);
    }
}
