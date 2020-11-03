<?php

namespace Alkoumi\LaravelArabicNumbers\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TransformsRequest;

class ConvertArabicDigitsToEnlishMiddleware extends TransformsRequest
{
    /**
     * The attributes that should not be transformed.
     *
     * @var array
     */
    protected $except = [
        'password', 'password_confirmation' //
    ];

    /**
     * Transform the given value.
     *
     * @param $key
     * @param mixed $value
     * @return mixed
     */
    protected function transform($key, $value)
    {
        if (in_array($key, $this->except, true)) {
            return $value;
        }
        return $this->transNumber($value);
    }

    protected function transNumber($value)
    {
        $hindi_numbers = ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'];
        $arabic_numbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        return str_replace($hindi_numbers, $arabic_numbers, $value);
    }
}
