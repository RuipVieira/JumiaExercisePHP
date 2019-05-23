<?php

namespace DAL;

use Classes\Phone\PhoneEntity;
use PDO;

class PhoneRepository
{
    public function getAll(): array
    {
        $pdo = new PDO("sqlite:/var/www/html/project/app/sample.db");
        $data = $pdo->query("select * from " . PhoneEntity::getTableName());
        $phoneNumberArray = [];

        while($row = $data->fetch()) {
            $phoneNumberArray[] = $row;
        }

        return $phoneNumberArray;
    }
}
