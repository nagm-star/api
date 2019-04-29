<?php

namespace App\Exceptions;

use Exception;

class ProductNotBelongToUser extends Exception
{
    public function render()
    {
        return ['data' => 'Product Not Belong To User'];
    }
}
