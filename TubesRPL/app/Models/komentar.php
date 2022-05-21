<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class komentar extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function video()
    {
        return $this->belongsTo(video::class, 'video_id');
    }
    public function reply()
    {
        return $this->hasMany(reply::class);
    }
    public function user()
    {
        return $this->belongsTo(user::class, 'user_id');
    }
}
