<?php
require_once('application/model/value/BaseDatabaseValue.class.php');

class EmployeeGenderFilterValue extends BaseDatabaseValue
{
    const ANY = 0;
    const MALE = 1;
    const FEMALE = 2;
    const NOGENDER = 3;

    static function values()
    {
        return array(
            self::MALE,
            self::FEMALE,
            self::NOGENDER
        );
    }

    static function isValidValue($value)
    {
        return self::isAllowedValue($value, self::values(), BaseDatabaseValue::VALUE_REQUIRED);
    }

}

?>
