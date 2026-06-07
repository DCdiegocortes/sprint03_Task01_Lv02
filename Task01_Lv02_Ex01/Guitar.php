<?php
declare(strict_types=1);

class Guitar implements Instrument
{
    public function play(): string
    {
        return "🎸 Strumming the guitar\n";
    }
}