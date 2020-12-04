<?php 
defined('APPLICATION_PATH') || define('APPLICATION_PATH', realpath( dirname(__FILE__) . '/app' ));
const DS = DIRECTORY_SEPARATOR;

require APPLICATION_PATH . DS . 'config' . DS . 'config.php'; 

$page = get('page', 'home');
$view = $config['VIEW_PATH'] . $page . '.php';
$template = $config['TEMPLATES_PATH'] . $page . '.php';

if(file_exists($view)) {
    require $view;
} 

if(file_exists($template)) {
    $main_content = $template;
} else {
    die("The page your looking for hasn't been found");
}

include $config['VIEW_PATH'] . 'base.php';