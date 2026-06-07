<?php
require_once "Instrument.php";
require_once "InstrumentPlayer.php";
require_once "Guitar.php";
require_once "Drum.php";
require_once "Piano.php";

$guitar = new Guitar();
$drum = new Drum();
$piano = new Piano();

$player = new InstrumentPlayer();

$playGuitar = $player->play($guitar);
$playDrum = $player->play($drum);
$playPiano = $player->play($piano);

echo $playGuitar;
echo $playDrum;
echo $playPiano;