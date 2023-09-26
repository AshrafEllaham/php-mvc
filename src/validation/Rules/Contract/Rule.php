<?php

namespace Learn\PhpMvc\validation\Rules\Contract;

interface Rule extends \Stringable
{
    public function apply($field, $value, $data = []);
}

