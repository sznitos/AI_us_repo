<?php

require_once 'Config.class.php';

$conf = new Config();

$conf->root_path = dirname(__FILE__);  
$conf->server_name = 'localhost:80';
$conf->server_url = 'http://'.$conf->server_name;
$conf->app_root = '/AI-repo/P5';
$conf->app_url = $conf->server_url.$conf->app_root;
$conf->css_path = '/../..'.$conf->app_root.'/assets/css/';

?>