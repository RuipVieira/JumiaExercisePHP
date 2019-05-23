<?php

namespace Classes\Phone;

class PhoneValidator
{
    public static function validate(string $phone): bool
    {
        if (preg_match('/\(237\)\ ?[2368]\d{7,8}$/', $phone)) {
            //checks number validity and if it's from Cameroon
            return true;
        }
        elseif (preg_match('/\(251\)\ ?[1-59]\d{8}$/', $phone)){
            //checks number validity and if it's from Ethiopia
            return true;
        }
        elseif (preg_match('/\(212\)\ ?[5-9]\d{8}$/', $phone)){
            //checks number validity and if it's from Morocco
            return true;
        }
        elseif (preg_match('/\(258\)\ ?[28]\d{7,8}$/', $phone)){
            //checks number validity and if it's from Mozambique
            return true;
        }
        elseif (preg_match('/\(256\)\ ?\d{9}$/', $phone)){
            //checks number validity and if it's from Uganda
            return true;
        }
        return false;
    }
}
