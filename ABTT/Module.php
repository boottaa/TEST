<?php
/**
 * Created by PhpStorm.
 * User: boott
 * Date: 02.04.2017
 * Time: 16:00
 */
namespace ABTT;
use ABTT\Info;

class Module implements Interfaces\Module {

    public static function on($mod, $option = '')
    {
        // TODO: Implement on() method.
        $config = require_once Info::get('root_dir').'/Modules/'.$mod.'/config.php';
        return $config['view'].'index.twig';
    }
};