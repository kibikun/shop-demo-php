<?php

declare(strict_types=1);

class Footer
{
    private array $service;

    public function __construct(string $data)
    {
        $this->service = require $data;
    }

    public function __get(string $data)
    {
        return $this->service[$data];
    }

    public function render(): void
    {
        $service = $this->service;

        include __DIR__ . "/../includes/footer.php";
    }
}
