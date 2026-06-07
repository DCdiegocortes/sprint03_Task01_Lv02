<?php
declare(strict_types=1);

class InstrumentPlayer
{
    public function play(Instrument $instrument): string
    {
        return $instrument->play();
    }
}
