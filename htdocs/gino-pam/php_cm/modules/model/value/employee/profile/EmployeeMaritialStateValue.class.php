<?php

/**
 * Description of EmployeeMaritialStateValue
 *
 * @author ben.dokter
 */

require_once('application/model/value/BaseValue.class.php');

class EmployeeMaritialStateValue extends BaseValue
{
    const NONE      	= 0;
    const GEHUWD		= 1;
    const WETTIGGEHUWD  = 2;
    const ONGEHUWD  	= 3;

    static function values()
    {
        return array(
            EmployeeMaritialStateValue::GEHUWD,
            EmployeeMaritialStateValue::WETTIGGEHUWD,
            EmployeeMaritialStateValue::ONGEHUWD
            );
    }

    static function isValidValue($value)
    {
        return self::isAllowedValue($value, self::values(), BaseDatabaseValue::VALUE_OPTIONAL);
    }
}

?>
