<?php
/**
 * Routes for user module
 *
 * @author      Orif (ViDi,HeMa)
 * @link        https://github.com/OrifInformatique
 * @copyright   Copyright (c), Orif (https://www.orif.ch)
 */
use User\Controllers\Auth;
$routes->add('user/auth/(:any)','\User\Controllers\Auth::$1');
$routes->add('user/auth/azure_login','Auth::azure_login');
$routes->add('user/auth/azure_login_begin','Auth::azure_login_begin');

$routes->add('user/admin/(:any)','\User\Controllers\Admin::$1');
?>
