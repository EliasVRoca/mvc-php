<?php
// ---
require_once('./controllers/errors.php');
// ---
class App
{
    function __construct()
    {
        $url = empty($_GET['url']) ? '' : $_GET['url'];
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        $url[0] = empty($url[0]) ? 'main' : $url[0];
        $url[1] = empty($url[1]) ? 'main' : $url[1];
        $param = empty($url[2]) ? '' : $url[2];
        // var_dump($url);
        $archivoController = 'controllers/' . $url[0] . '.php';
        if (file_exists($archivoController)) {
            require_once($archivoController);
            $controller = new $url[0];
            $controller->loadModel($url[0]);

            if (method_exists($controller, $url[1])) {
                $controller->{$url[1]}($param);
            }
        } else {
            $controller = new Errors;
        }
    }
}
