<?php

/**
 * Description of EmployeeContractStateConverter
 *
 * @author ben.dokter
 */

require_once('application/interface/converter/AbstractBaseConverter.class.php');

require_once('modules/model/value/employee/profile/EmployeeMaritialStateValue.class.php');

class EmployeeMaritialStateConverter extends AbstractBaseConverter
{
    static function display($value, $empty = '-')
    {
        $display = $empty;
        switch($value) {
            case EmployeeMaritialStateValue::GEHUWD:
                $display = TXT_UCF('MS_GEHUWD');
                break;
            case EmployeeMaritialStateValue::WETTIGGEHUWD:
                $display = TXT_UCF('MS_WETTIGGEHUWD');
                break;
            case EmployeeMaritialStateValue::ONGEHUWD:
                $display = TXT_UCF('MS_ONGEHUWD');
                break;
        }
        return $display;
    }

    // default de display
    static function input($value, $empty = '-')
    {
        return self::display($value, $empty);
    }}

?>
