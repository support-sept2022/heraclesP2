<?php

class Shield
{
    private int $protection = 10;
    private string $image = 'shield.svg';

    public function getImage(): string
    {
        return 'assets/images/' . $this->image;
    }

    public function getProtection(): int
    {
        return $this->protection;
    }
}