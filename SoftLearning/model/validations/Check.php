<?php

class Check {

    public static function isValidEmail_OLD(string $email): bool {
        if (self::isShort($email, 10) == false AND str_contains($email, "@") !== false) {
            return true;
        } else {
            return false;
        }
    }

    public static function isValidDni_OLD(string $dni): bool {
        if (self::isShort($dni, 10) == false AND str_contains($dni, "-") !== false) {
            return true;
        } else {
            return false;
        }
    }

    public static function IsPositive(int $value): bool {
        if ($value > 0) {
            return true;
        }
        return false;
    }

    public static function isNull($value): bool {
        if ($value === NULL) {
            return true;
        }
        return false;
    }

    public static function isShort(string $value, int $min): bool {
        if (strlen(trim($value)) < $min) {
            return true;
        }
        return false;
    }

    public static function isZero(float $value): bool {
        if ($value === 0) {
            return true;
        }
        return false;
    }

    public static function isNegative(float $value): bool {
        if ($value < 0) {
            return true;
        }
        return false;
    }

    public static function betweenValues(int $value, int $min, int $max): bool {
        if ($value >= $min AND $value <= $max) {
            return true;
        }
        return false;
    }

    public static function isValidSO(string $so): bool {
        if (str_contains($so, "Windows") !== false or str_contains($so, "Linux") !== false or str_contains($so, "macos") !== false OR str_contains($so, "Android") !== false) {
            return true;
        }
        return false;
    }
    
    //PRACTICAMOS CON EXPRESIONES REGULARES
    public static function isValidDni(string $dni):bool{
        $patron="/^([0-9]{8})([-]?)([A-Za-z]{1})$/";
        if(preg_match($patron, $dni)===true){
            return true;
        }
        return false;
    }
    public static function isValidMail(string $mail):bool{
        $patron="/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/";
        if(preg_match($patron, $mail)===true){
            return true;
        }
        return false;
    }
}
    