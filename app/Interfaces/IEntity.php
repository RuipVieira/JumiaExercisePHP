<?php

namespace Interfaces;

Interface IEntity
{
    /**
     * @return string
     */
    public static function getTableName(): string;
}