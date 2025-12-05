<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'exhibition_id',
    ];

    public function product()
    {
        return $this->belongsTo(Exhibition::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
