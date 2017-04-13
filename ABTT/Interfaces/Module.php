<?php
/**
 * Created by PhpStorm.
 * User: boott
 * Date: 02.04.2017
 * Time: 16:03
 */
namespace ABTT\Interfaces;

interface Module{
    //Метод подкючает конфигурациионный файл модуля.
    public static function on($mod, $option);
}