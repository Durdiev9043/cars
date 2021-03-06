<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CarRules implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $n=strlen($value); //9
        $seriya=substr($value,0,2);
        $ser=strtoupper($seriya);
        $num=substr($value,3,$n-2);

        if(is_numeric($num) && $seriya==$ser && $n==10){
            return true;
        }
        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Trasport vositasi guvohnomasi raqamni shu formotda kiriting: AAA1234567';
    }
}
