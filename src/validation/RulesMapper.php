<?php

namespace Learn\PhpMvc\validation;

use Learn\PhpMvc\validation\Rules\MaxRule;
use Learn\PhpMvc\validation\Rules\EmailRule;
use Learn\PhpMvc\validation\Rules\UniqueRule;
use Learn\PhpMvc\validation\Rules\BetweenRule;
use Learn\PhpMvc\validation\Rules\AlphaNumRule;
use Learn\PhpMvc\validation\Rules\RequiredRule;
use Learn\PhpMvc\validation\Rules\ConfirmedRule;

trait RulesMapper
{
    protected static array $map = [
        'required' => RequiredRule::class,
        'alnum' => AlphaNumRule::class,
        'max' => MaxRule::class,
        'between' => BetweenRule::class,
        'email' => EmailRule::class,
        'confirmed' => ConfirmedRule::class,
        'unique' => UniqueRule::class,
    ];

    public static function resolve(string $rule, $options)
    {
        return new static::$map[$rule](...$options);
    }
}