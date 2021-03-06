<?php
	require("load.php");

    $template = new TemplateController;
    //$model = $id."Model.php";

    $view = $id."View.php";
    $controller = $id."Controller.php";

    //require($model);
    require(ROOT."/php/views/".$view);
    require(ROOT."/php/controllers/".$controller);

    $controllerName = ucfirst($id)."Controller";

    $controller = new $controllerName;
    $actionData = $template->getAction();
    $action = $actionData['action'];
    if(isset($actionData['params'])){
        $controller->$action($actionData['params']);
    }else{
        $controller->$action();
    }
?>