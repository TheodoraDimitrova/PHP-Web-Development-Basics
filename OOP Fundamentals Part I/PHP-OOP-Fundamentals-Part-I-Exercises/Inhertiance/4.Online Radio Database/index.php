<?php

use Radio\Song;
use Radio\Playlist;

include 'Song.php';
include 'Playlist.php';
$playList=0;
try {
    $n = trim(fgets(STDIN));
    for ($i = 0; $i < $n; $i++) {
        $song = trim(fgets(STDIN));
        $songArr = explode(';', $song);
        $artistName = $songArr[0] . PHP_EOL;
        $songName = $songArr[1] . PHP_EOL;
        $time = $songArr[2] . PHP_EOL;
        $playList = new Playlist($artistName, $songName, $time);



    }
   echo $playList;

} catch (Exception $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
}
