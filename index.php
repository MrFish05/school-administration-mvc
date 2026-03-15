<?php
    require_once 'model/function.inc.php';

    spl_autoload_register('autoloadControllers');
    spl_autoload_register('autoloadEntities');
    spl_autoload_register('autoloadTraits');

    $action = $_GET['action'] ?? 'showAllClasses';
    $controller = $_GET['controller'] ?? 'index';

    $controllerName = ucfirst($controller) . 'Controller';

    if (class_exists($controllerName)) {
        $requestController = new $controllerName();
        $requestController->run($action);
    } else {
        $requestController = new IndexController();
        $requestController->render404();
    }
?>