<?php

namespace App\Models;

use App\Enums\PriceType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Price extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $cast = [
        'type' => PriceType::class,
    ];

    public function priceable()
    {
        return $this->morphTo();
    }
}
