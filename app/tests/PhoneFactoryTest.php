<?php

namespace tests;

use Classes\Phone\PhoneEntity;
use Classes\Phone\PhoneFactory;
use PHPUnit\Framework\TestCase;

class PhoneFactoryTest extends TestCase
{
    public function testCreateSuccess()
    {
        $phoneArray = [
            'phone' => '(212) 698054317',
        ];

        $phoneEntity = new PhoneEntity();
        $phoneEntity->setCountry('Morocco');
        $phoneEntity->setState(true);
        $phoneEntity->setCountryCode('+212');
        $phoneEntity->setPhoneNumber('698054317');

        $actualResult = PhoneFactory::create($phoneArray);

        $this->assertInstanceOf(PhoneEntity::class, $actualResult);
        $this->assertEquals($phoneEntity, $actualResult);
    }

    public function testCreateFailure()
    {
        $phoneArray = [
            'phone' => '(351) 9123123123123',
        ];

        $phoneEntity = new PhoneEntity();
        $phoneEntity->setCountry('Invalid Country');
        $phoneEntity->setState(false);
        $phoneEntity->setCountryCode('+351');
        $phoneEntity->setPhoneNumber('9123123123123');


        $actualResult = PhoneFactory::create($phoneArray);

        $this->assertInstanceOf(PhoneEntity::class, $actualResult);
        $this->assertEquals($phoneEntity, $actualResult);
    }
}
