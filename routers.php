
<?php
$controllers = array(
    'pages' => ['home', 'error'],
    'registration' => ['registration'],
    'login' => ['login', 'logout']
    //'posts' => ['index'], // bổ sung thêm
);

if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
    $controller = 'pages';
    echo $controller . "    " . $action;
    $action = 'error';
}
$link = 'controllers/'  .$controller . '_controller.php';
include_once(str_replace('*','',$link));
$class = str_replace('_', '', ucwords($controller, '_')) . 'Controller';
$controller = new $class;


$controller->$action();