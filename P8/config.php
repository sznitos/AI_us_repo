<?php 

$conf->root_path = dirname(__FILE__);  
$conf->server_name = 'localhost:80';
$conf->app_root = '/AI-repo/P7';
$conf->css_path = $conf->app_url.'/assets/css/';
$conf->action_root = $conf->app_root.'/ctrl.php?action=';

$conf->server_url = 'http://'.$conf->server_name;
$conf->app_url = $conf->server_url.$conf->app_root;
$conf->action_url = $conf->server_url.$conf->action_root;
?>