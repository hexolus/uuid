<?php

use Hexolus\UUID\UUID;

if (!function_exists('uuid')) {
    function uuid()
    {
        return UUID::generate();
    }
}
