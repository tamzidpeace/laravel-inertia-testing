<?php

namespace App\Enums;

enum PaymentMethod: string
{
    case CASH = 'CASH';
    case BANK = 'BANK';
    case CARD = 'CARD';
    case MFS = 'MFS';
}
