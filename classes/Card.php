<?php

declare(strict_types=1);

class Card
{

    private array $card;

    public function __construct(string $data)
    {
        $this->card = require $data;
    }

    public function __get(string $data)
    {
        return $this->card[$data];
    }

    public function render(): void
    {
        $product = $this->card['product'];

        include __DIR__ . "/../includes/card.php";
    }
}
