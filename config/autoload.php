<?php
/**
 * Created by PhpStorm.
 * User: manuelernesto
 * Date: 2/15/16
 * Time: 7:56 PM
 */

function autoloader($classe)
{
    $path = str_replace('_', '/', $classe);
    require $path . '.php';
}

spl_autoload_register('autoloader');