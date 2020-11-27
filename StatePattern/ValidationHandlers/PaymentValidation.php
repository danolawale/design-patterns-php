<?php

namespace ValidationHandlers;

class PaymentValidation
{
    public function validatePaymentMethod(string $method): array
    {
        if(in_array($method, ['Cash', 'Debit Card', 'Credit Card']))
        {
            return [];
        }
        else
        {
            return ['Invalid Payment Method'];
        }
    }
}