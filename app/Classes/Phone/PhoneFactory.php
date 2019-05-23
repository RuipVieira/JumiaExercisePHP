<?php

namespace Classes\Phone;

final class PhoneFactory
{
    /**
     * @param array $phoneArray
     *
     * @return PhoneEntity
     */
    public static function create(array $phoneArray): PhoneEntity
    {
        $phone = new PhoneEntity();
        $phone->setPhoneNumber(PhoneNumberFormatter::format(($phoneArray[PhoneEntity::PHONE])));
        $phone->setState(PhoneValidator::validate($phoneArray[PhoneEntity::PHONE]));
        $phone->setCountryCode(CountryCodeExtractor::extract($phoneArray[PhoneEntity::PHONE] ?? 'Invalid Code'));
        $phone->setCountry(CountryMapping::CODE_TO_COUNTRY_MAPPING[$phone->getCountryCode()] ?? 'Invalid Country');

        return $phone;
    }

}