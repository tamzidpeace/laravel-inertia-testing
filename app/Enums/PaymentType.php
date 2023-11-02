<?php

namespace App\Enums;

enum PaymentType: string
{
    case BKASH = 'BKASH';
    case NAGAD = 'NAGAD';
    case VISA = 'VISA';
    case AMEX = 'AMEX';
    case MASTERCARD = 'MASTERCARD';
}
