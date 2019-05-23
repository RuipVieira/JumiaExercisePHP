<?php

namespace Classes\Phone;

class CountryMapping
{
    public const UGANDA_NAME = 'Uganda';
    public const CAMEROON_NAME = 'Cameroon';
    public const ETHIOPIA_NAME = 'Ethiopia';
    public const MOZAMBIQUE_NAME = 'Mozambique';
    public const MOROCCO_NAME = 'Morocco';

    public const UGANDA_CODE = '+256';
    public const CAMEROON_CODE = '+237';
    public const ETHIOPIA_CODE = '+251';
    public const MOZAMBIQUE_CODE = '+258';
    public const MOROCCO_CODE = '+212';

    public const CODE_TO_COUNTRY_MAPPING = [
        self::UGANDA_CODE => self::UGANDA_NAME,
        self::CAMEROON_CODE => self::CAMEROON_NAME,
        self::ETHIOPIA_CODE => self::ETHIOPIA_NAME,
        self::MOZAMBIQUE_CODE => self::MOZAMBIQUE_NAME,
        self::MOROCCO_CODE => self::MOROCCO_NAME,
    ];
}