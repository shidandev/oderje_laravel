<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function presentPrice()
    {
        return 'RM'.number_format($this->p_price / 100, 2);
    }
}
