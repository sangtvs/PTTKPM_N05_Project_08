<?php

/**
 * Index Site
 * Author: Phạm Quang Huy (Harry Pham)
 * Mail: pqhuy2@software.misa.com.vn
 **/

require_once 'config/config.php';
date_default_timezone_set(Config::TIMEZONE);

error_reporting(0);
ini_set('display_errors', 0);

require_once 'controllers/controller_login.php';
$login = new Controller_Login();
$login->show_register();