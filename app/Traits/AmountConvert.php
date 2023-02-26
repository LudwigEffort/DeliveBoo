<?php

namespace App\Traits;


trait AmountConvert {
    public function amountConvert($amountCents)
    {
        $amountTenths = number_format(($amountCents / 100), 2, '.', '');

        return $amountTenths;
    }
}
