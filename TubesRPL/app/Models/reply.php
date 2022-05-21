<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reply extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function komentar()
    {
        return $this->belongsTo(komentar::class, 'komentar_id');
    }
    public function user()
    {
        return $this->belongsTo(user::class, 'user_id');
    }
}
