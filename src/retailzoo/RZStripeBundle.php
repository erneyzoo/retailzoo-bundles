<?php

namespace RZ;

use RZ\Services\RZConfig;
use Stripe\StripeClient;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;
;

class RZStripeBundle extends AbstractBundle
{
    public function getPath(): string
    {
        return __DIR__;
    }
}
