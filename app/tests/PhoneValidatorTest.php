<?php

namespace tests;

use Classes\Phone\PhoneValidator;
use PHPUnit\Framework\TestCase;

class PhoneValidatorTest extends TestCase
{
    public function testPhoneValidatorSuccess(){
        $phoneNumber = '(212) 698054317';

        $this->assertTrue(PhoneValidator::validate($phoneNumber));
    }

    public function testPhoneValidatorFailure(){
        $phoneNumber = '(351) 919999999';

        $this->assertFalse(PhoneValidator::validate($phoneNumber));
    }
}
