<?php

namespace Hexolus\Uuid;

class Uuid extends \Ramsey\Uuid\Uuid {
    /**
     * Generate Standard V4 UUID
     * 
     * @return string
     */
    public static function generate()
    {
        return parent::uuid4()->toString();
    }
}