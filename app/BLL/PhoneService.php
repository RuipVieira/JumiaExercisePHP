<?php

namespace BLL;

use Classes\Phone\PhoneFactory;
use DAL\PhoneRepository;

class PhoneService
{
    /**
     * @return array
     */
    public function getAll(): array
    {
        $objectArr = [];

        foreach ((new PhoneRepository())->getAll() as $phone) {
            $objectArr[] = PhoneFactory::create($phone);
        }

        return $objectArr;
    }

}