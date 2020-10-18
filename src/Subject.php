<?php

namespace App;

abstract class Subject
{
    protected $observers = [];

    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer)
    {
        $this->observers = array_diff($this->observers, [$observer]);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }

}