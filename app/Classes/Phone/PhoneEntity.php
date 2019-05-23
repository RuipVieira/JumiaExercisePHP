<?php

namespace Classes\Phone;

use Interfaces\IEntity;

class PhoneEntity implements IEntity
{
    //DB specs
    private const TABLE = 'Customer';
    public const ID = 'id'; //never used
    public const NAME = 'name'; //never used
    public const PHONE = 'phone';

    /** @var int */
    private $id; //never used

    /** @var string */
    private $name; //never used

    /** @var string */
    private $country;

    /** @var string */
    private $state;

    /** @var string */
    private $countryCode;

    /** @var string */
    private $phoneNumber;

    /**
     * @return string
     */
    public static function getTableName(): string
    {
        return self::TABLE;
    }

    /**
     * @param $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @param $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @param $countryCode
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }

    /**
     * @param $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @return bool
     */
    public function isValid(): bool
    {
        return $this->state;
    }

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }
}