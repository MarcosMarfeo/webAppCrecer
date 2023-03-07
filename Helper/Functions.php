<?php
namespace App\Helper;

class Functions {

    public static function parameters($index, $default = '') {
        $data = array_merge($_POST, $_GET);
        $return = '';
        
        if (is_numeric($default)) {
            $return = isset($data[$index]) ? (int)$data[$index] : (int)$default;
        } else {
            $return = isset($data[$index]) ? trim($data[$index]) : $default;
        }

        return $return;
    }

}