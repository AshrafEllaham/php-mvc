<?php

namespace Learn\PhpMvc\validation\Rules;

use Learn\PhpMvc\validation\Rules\Contract\Rule;

class MaxRule implements Rule
{
    protected $max;

    public function __construct(int $max)
    {   
        $this->max = $max;
    }

    public function apply($field, $value, $data)
    {
        return (strlen($value) < $this->max);
    }

    public function __toString()
    {
        return "%s must be less than {$this->max}";
    }
}
