<?php

namespace tests;

use Classes\Phone\CountryCodeExtractor;
use PHPUnit\Framework\TestCase;

class CountryCodeExtractorTest extends TestCase
{
    public function testExtractCodeSuccess()
    {
        $expectedResult = '+351';
        $phoneNumber = '(351) 919999999';

        $this->assertEquals($expectedResult, CountryCodeExtractor::extract($phoneNumber));
    }

    public function testExtractCodeFailure()
    {
        $expectedResult = '+353';
        $phoneNumber = '(351) 919999999';

        $this->assertNotEquals($expectedResult, CountryCodeExtractor::extract($phoneNumber));
    }
}