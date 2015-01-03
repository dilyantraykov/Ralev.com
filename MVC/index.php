<?php
include "controller.php";
include "model.php";
include "view.php";

$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action'])) {
  $controller = $controller->clicked();
}

echo $view->output();