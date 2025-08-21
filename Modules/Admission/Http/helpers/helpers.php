<?php
if (!defined('ADMISSION_MODULE_SCREEN_NAME')) {
    define('ADMISSION_MODULE_SCREEN_NAME', 'admission');
}
if (!defined('ADMISSION_FORM_TEMPLATE_VIEW')) {
    define('ADMISSION_FORM_TEMPLATE_VIEW', 'admission-form-template-view');
}
//add_next_line
if (! defined('ADMISSIONMERIT_MODULE_SCREEN_NAME')) {
    define('ADMISSIONMERIT_MODULE_SCREEN_NAME', 'admissionmerit');
}

if (!defined('ADMISSIONMARK_MODULE_SCREEN_NAME')) {
    define('ADMISSIONMARK_MODULE_SCREEN_NAME', 'admissionmark');
}

if (!defined('ADMISSIONSUBJECT_MODULE_SCREEN_NAME')) {
    define('ADMISSIONSUBJECT_MODULE_SCREEN_NAME', 'admissionsubject');
}


if (!function_exists('englishToBanglaNumber')) {
    function englishToBanglaNumber($number)
    {
        $englishNumbers = range(0, 9);
        $banglaNumbers = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];

//        if(Language::getCurrentLocale() == 'bn'){
        $convertedNumber = str_replace($englishNumbers, $banglaNumbers, $number);
//
        return $convertedNumber;
//        }
        //    return $number;
    }
}
if (!function_exists('calculate_age')) {
    function calculate_age($birthdate)
    {
//        $birthdate = '1990-05-15';
        $birthDateObj = new DateTime($birthdate);
        $currentDateObj = new DateTime();
        $ageInterval = $currentDateObj->diff($birthDateObj);
        $age = $ageInterval->y;
//        echo "Age: " . $age . " years";
        return $age;
    }
}
if (!function_exists('checkOddEven')) {
    function checkOddEven($number)
    {
        if ($number % 2 === 0) {
            return 1;
        } else {
            return 0;
        }
    }
}
if (!function_exists('checkColumCount')) {
    function checkColumCount($number)
    {
        if ($number == 1) {
            return 12;
        } elseif ($number == 2) {
            return 6;
        } elseif ($number == 3) {
            return 4;
        } elseif ($number == 4) {
            return 3;
        } elseif ($number == 5) {
            return 2;
        } elseif ($number == 6) {
            return 2;
        } else {
            return 1;
        }
    }
}

if (!function_exists('formatNumber')) {
    function formatNumber($number)
    {
        // Format the number with two decimal places
        $formattedNumber = number_format($number, 2);

        // Remove trailing zeros
        $formattedNumber = rtrim($formattedNumber, '0');

        // If the number ends with a decimal point, remove it
        $formattedNumber = rtrim($formattedNumber, '.');

        return $formattedNumber;
    }
}

