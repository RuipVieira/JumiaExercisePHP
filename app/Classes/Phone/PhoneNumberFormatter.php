<?php

namespace Classes\Phone;

final class PhoneNumberFormatter
{
    /**
     * @param string $phoneNumber
     *
     * @return string
     */
    public static function format(string $phoneNumber): string
    {
        return substr($phoneNumber, 6);
    }
}