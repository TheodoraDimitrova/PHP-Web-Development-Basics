<?php


namespace Factory;


class MoodFactory
{
    private $mood;

    public function __construct($points)
    {
        $this->setMood($points);
    }

    private function setMood($points)
    {
        if ($points < -5) {
            $this->mood = 'Angry';
        } elseif ($points < 0) {
            $this->mood = 'Sad';
        } elseif ($points < 15) {
            $this->mood = 'Happy';
        } elseif ($points > 15) {
            $this->mood = 'PHP';
        }

    }

    public function getMood()
    {
        return $this->mood;
    }

}