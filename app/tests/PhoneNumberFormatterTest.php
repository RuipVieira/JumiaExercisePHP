<?php

namespace tests;

use Classes\Phone\PhoneNumberFormatter;
use PHPUnit\Framework\TestCase;

class PhoneNumberFormatterTest extends TestCase
{
    public function testFormatNumberSuccess()
    {
        $expectedResult = '919999999';
        $phoneNumber = '(351) 919999999';

        $this->assertEquals($expectedResult, PhoneNumberFormatter::format($phoneNumber));
    }

    public function testFormatNumberFailure()
    {
        $expectedResult = '91';
        $phoneNumber = '(351) 919999999';

        $this->assertNotEquals($expectedResult, PhoneNumberFormatter::format($phoneNumber));
    }
}