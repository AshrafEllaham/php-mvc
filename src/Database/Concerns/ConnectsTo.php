<?php

namespace Learn\PhpMvc\Database\Concerns;

use Learn\PhpMvc\Database\Managers\Contracts\DatabaseManager;

trait ConnectsTo
{
    public static function connect(DatabaseManager $manager)
    {
        return $manager->connect();
    }
}
