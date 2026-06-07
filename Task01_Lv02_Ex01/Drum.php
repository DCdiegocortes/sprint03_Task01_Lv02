<?php
declare(strict_types=1);

class Drum implements Instrument
{
    public function play(): string
    {
        return "🥁 Beating the drums\n";
    }
}