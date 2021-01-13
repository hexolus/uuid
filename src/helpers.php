<?php

use Hexolus\Uuid\Uuid;

if (!function_exists('uuid')) {
    function uuid()
    {
        return Uuid::generate();
    }
}
