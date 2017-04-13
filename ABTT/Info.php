<?php
/**
 * Created by PhpStorm.
 * User: boott
 * Date: 02.04.2017
 * Time: 16:14
 */
namespace ABTT;
class Info{

    private static $config;

    private static function getconfig(){
        if(empty(self::$config)) {
            self::$config = require dirname(__DIR__) . '/env.php';
        }
        return self::$config;
    }

    public static function get($val = '', $type='base'){
        self::getconfig();
        if($val == 'ALL'){
            $r['ALL'] = self::$config;
        }else{
            $r= self::$config[$type][$val];
        }
        return $r;
    }

    public static function get_db($name = 'default', $param = ''){
        self::getconfig();

        if(empty($param)){
            $r = self::$config['database'][$name];
        }else{
            $r = self::$config['database'][$name][$param];
        }
        return $r;
    }
}