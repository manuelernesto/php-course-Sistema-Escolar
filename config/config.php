<?php
/**
 * Created by PhpStorm.
 * User: manuelernesto
 * Date: 2/15/16
 * Time: 7:55 PM
 */

use ActiveRecord\Config;

require_once 'autoload.php';
require_once '../libraries/activerecord/ActiveRecord.php';

$cfg = Config::instance();
$cfg->set_model_directory('models');
$cfg->set_connections(array('development' =>
    'mysql://root:root@localhost/sisEscolar'));