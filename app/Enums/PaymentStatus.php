<?php

namespace App\Enums;

enum PaymentStatus: string
{
    case HOLE = 'hold';
    case COMPLETED = 'completed';
    case REJECTED = 'rejected';
    case FAILED = 'failed';
    case REFUND = 'refund';
}
