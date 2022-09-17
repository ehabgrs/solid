<?php

namespace SOLID;

define('APP_PATH', realpath(dirname(__FILE__)));

class AutoLoad
{
    public static function autoload($className)
    {
        $className = str_replace('SOLID', '', $className);
        $className = str_replace('\\', '/', $className);
        $className = $className . '.php';
        $className = strtolower($className);
		//echo APP_PATH . $className;
        if(file_exists(APP_PATH . $className)) {
            require_once APP_PATH . $className;
        }
    }
}
spl_autoload_register(__NAMESPACE__ . '\AutoLoad::autoload');