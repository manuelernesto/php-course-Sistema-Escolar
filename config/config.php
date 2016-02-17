<?php
/**
 * Created by PhpStorm.
 * User: manuelernesto
 * Date: 2/15/16
 * Time: 7:55 PM
 */


require_once 'autoload.php';
require_once '../libraries/activerecord/ActiveRecord.php';

$path_models = realpath('models/');

$cfg = ActiveRecord\Config::instance();
$cfg->set_model_directory($path_models);
$cfg->set_connections(array('development' =>
    'mysql://root:root@localhost/sisEscolar'));


