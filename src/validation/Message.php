<?php

namespace Learn\PhpMvc\validation;

class Message
{
    public static function generate($rule, $field)
    {
        return str_replace('%s', $field, $rule);  
    }
}