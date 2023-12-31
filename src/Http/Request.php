<?php

namespace Learn\PhpMvc\Http;

use Learn\PhpMvc\support\Arr;
use Learn\PhpMvc\support\Str;

class Request
{

    public function path()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        return str_contains($path, '?') ? explode('?', $path)[0] : $path;
    }

    public function getMethod()
    {
        return Str::lower($_SERVER['REQUEST_METHOD']);
    }

    public function all()
    {
        return $_REQUEST;
    }

    public function only($keys)
    {
        return Arr::only($this->all(), $keys);
    }

    public function get($key)
    {
        return Arr::get($this->all(), $key);
    }
}
