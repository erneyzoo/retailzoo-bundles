<?php

namespace RZ\Services;

class RZConfig
{
    private string $stripeToken;

    public function __construct(string $stripeToken)
    {
        $this->stripeToken = $stripeToken;
    }

    public function getStripeToken():string
    {
        return $this->stripeToken;
    }
}