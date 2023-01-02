<?php

if (!function_exists('clean_string')) {
    function clean_string($string)
    {
        $result = str_replace(array('\'', '"', ',', ';', '<', '>', '!', '-'), ' ', $string);
        return $result;
    }
}
