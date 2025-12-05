<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'sell_id',
        'buyer_id',
        'exhibition_id',
        'purchase_method_id',
        'address_id',
    ];

    public function sell()
    {
        return $this->belongsTo(User::class, 'sell_id');
    }

    public function buyer()
    {
        return $this->belongsTo(User::class, 'buyer_id');
    }

    public function exhibition()
    {
        return $this->belongsTo(Exhibition::class, 'exhibition_id');
    }

    public function purchase_method()
    {
        return $this->belongsTo(Purchase_method::class, 'purchase_method_id');
    }

    public function address()
    {
        return $this->belongsTo(Address::class, 'address_id');
    }
}
