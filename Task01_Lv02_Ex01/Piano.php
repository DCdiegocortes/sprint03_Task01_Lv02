<?php
declare(strict_types=1);

class Piano implements Instrument
{
    public function play(): string
    {
        return "🎹 Playing the piano\n";
    }
}