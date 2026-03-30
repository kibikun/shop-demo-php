<?php

declare(strict_types=1);

class MainNavObject
{
    private array $nav_data;

    public function __construct(string $data)
    {
        $this->nav_data = require $data;
    }

    public function __get(string $data)
    {
        return $this->nav_data[$data];
    }

    public function render(): void
    {
        $icon = $this->nav_data['icon'];
        include __DIR__ . "/../includes/mainNav.php";
    }
}
