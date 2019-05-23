<?php

namespace Classes\Phone;

class CountryCodeExtractor
{
    /**
     * @param string $phoneNumber
     *
     * @return string
     */
    public static function extract(string $phoneNumber): string
    {
        return "+" . (substr($phoneNumber, 1, 3));
    }
}