<?php

namespace App\Models;

use App\Enums\PaymentMethod;
use App\Enums\PaymentStatus;
use App\Enums\PaymentType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $cast = [
        'payment_method' => PaymentMethod::class,
        'payment_type' => PaymentType::class,
        'payment_status' => PaymentStatus::class
    ];
}
