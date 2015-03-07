<?php
$controller = (isset($_GET['controllers'])) ? trim($_GET['controllers']) : 'default';
$action     = (isset($_GET['action'])) ? trim($_GET['action']) : 'display';

if (is_file('controllers/' . $controller . '.php')) {
    require 'controllers/' . $controller . '.php';

    $className  = $controller . '_controller';
    $actionName = $action . 'Action';

    if (class_exists($className)) {
        $controller = new $className();

        if (method_exists($controller, $actionName)) {
            echo $controller->$actionName();
        }
    }
}
?>