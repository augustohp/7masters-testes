<?php

namespace Phpsp;

class Greeting
{
    public function someone($who)
    {
        if (strlen($who) < 3) {
            throw new \InvalidArgumentException('Invalid someone.');
        }
        return 'Hello '.$who.'!';
    }
}