<?php

namespace Learn\PhpMvc\validation\Rules;

use Learn\PhpMvc\validation\Rules\Contract\Rule;

class ConfirmedRule implements Rule
{
    public function apply($field, $value, $data = [])
    {
        return ($data[$field] === $data[$field . '_confirmation']);
    }

    public function __toString()
    {
        return '%s does not match %s confirmation';
    }
}
