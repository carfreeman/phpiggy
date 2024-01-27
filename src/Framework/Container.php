<?php

declare(strict_types=1);

namespace Framework;

class Container
{
    private array $definitons = [];

    public function addDefinitions(array $definitions)
    {
        dd($definitions);
    }
}