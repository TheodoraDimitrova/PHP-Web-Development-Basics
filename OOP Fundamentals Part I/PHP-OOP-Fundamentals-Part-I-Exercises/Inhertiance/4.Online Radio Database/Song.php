<?php

namespace Radio;


class Song
{
    protected $artistName;
    protected $songName;
    protected $time;
    protected static $sumTime=0;
    protected static $counter=0;

    public function __construct(string $artistName, string $songName, string $time)
    {
        $this->setArtistName($artistName);
        $this->setSongName($songName);
        $this->setTime($time);
        $this->setSongs();
    }

    public function setArtistName($artistName)
    {
        $len = strlen(trim($artistName));

        if ($len < 3 || $len > 20) {
            echo 'Artist name should be between 3 and 20 symbols.';
        }else{
            $this->artistName = $artistName;
        }



    }
    public function setSongName($songName)
    {
        $len = strlen(trim($songName));
        if ($len < 3 || $len > 30) {
            echo 'Song name should be between 3 and 30 symbols.';
        } else {
            $this->songName = $songName;
        }

    }
    public function setTime($time)
    {
        $arrTime = explode(":", $time);
        $min = $arrTime[0];
        $sec = $arrTime[1];
        if (count($arrTime) === 2 && is_numeric($min) && is_numeric($sec)) {
            echo 'Invalid song length.';
        }
        if ($min < 0 || $min > 14) {
            echo 'Song minutes should be between 0 and 14.'.PHP_EOL;
        }
        if ($sec < 0 || $sec > 59) {
            echo "Song seconds should be between 0 and 59.".PHP_EOL;
        }else{
            $this->time = $min * 60 + $sec;
        }

    }


    public function getArtistName()
    {
        return $this->artistName;
    }
    public function getSongName()
    {
        return $this->songName;
    }
    public function getTime()
    {
        return $this->time;
    }



    public function setSongs(){
        if($this->artistName!=null && $this->songName!=null && $this->time!=null){
            echo "Song added.".PHP_EOL;
            static::$counter++;
           static ::$sumTime+=$this->time;

        }
    }





}