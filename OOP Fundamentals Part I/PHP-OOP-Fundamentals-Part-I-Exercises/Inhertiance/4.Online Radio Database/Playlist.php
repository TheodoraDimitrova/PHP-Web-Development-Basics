<?php
namespace Radio;


class Playlist extends Song
{
    public function __toString()
    {
        return 'Songs added: '.$this::$counter.PHP_EOL.
        "Playlist length: ".gmdate('h',$this::$sumTime)."h ".
            gmdate('i',$this::$sumTime)."m ".
            gmdate('s',$this::$sumTime)."s ";
    }


}