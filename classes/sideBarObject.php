<?php

declare(strict_types=1);

class SideBarObject
{

    private array $side_bar;
    public function __construct(string $data)
    {
        $this->side_bar = require $data;
    }

    public function __get(string $data)
    {
        return $this->side_bar[$data];
    }

    public function render(): void
    {
        $list1 = $this->side_bar['footwear'];
        $list2 = $this->side_bar['brand'];
        include __DIR__ . "/../includes/sideBar.php";
    }
}
