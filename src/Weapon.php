<?php

class Weapon {

    private int $damage = 10;
    private string $image = 'sword.svg';

    public function getImage(): string
    {
        return 'assets/images/' . $this->image;
    }

    public function getDamage(): int
    {
        return $this->damage;
    }
}