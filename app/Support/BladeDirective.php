<?php

namespace App\Support;

use Blade;

final class BladeDirective
{
    private string $name;
    /** @var callable $callable */
    private $callable;

    public function __construct(string $name, callable $callable)
    {
        $this->name     = $name;
        $this->callable = $callable;
    }

    public static function create(string $name, callable $callable): BladeDirective
    {
        return new self($name, $callable);
    }

    public function register(): void
    {
        Blade::directive($this->name, function ($variables) {
            return ($this->callable)("'" . $variables . "'", $variables);
        });
    }
}
