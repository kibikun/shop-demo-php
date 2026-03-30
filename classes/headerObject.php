<?php

declare(strict_types=1);


class HeaderObject
{
    private array $data;
    public function __construct(string $data)
    {
        $this->data = require $data;
    }

    public function __get(string $data)
    {
        return $this->data[$data];
    }

    public function render(): void
    {
        $keyword = $this->data['keyword'];
        $desc = $this->data['desc'];
        $style = $this->data['style'];
        $media = $this->data['media'];
        $title = $this->data['title'];
        $logo = $this->data['logo'];
        $cart_btn = $this->data['cart_btn'];

        include __DIR__ . "/../includes/header.php";
    }
}
