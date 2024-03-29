<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\Rule;

class Myrule implements Rule
{
    public function __construct($n)
    {
        $this->num = $n;
    }
   
    public function passes($attribute, $value)
    {
       return $value % $this->num == 0;
    }

    public function message()
    {
        return $this->num . 'で割り切れる値を指定してください。';
    }
}
