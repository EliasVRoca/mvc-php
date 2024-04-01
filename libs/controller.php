<?php
class Controller
{
    protected $view;
    protected $model;

    function __construct()
    {
        $this->view = new View();
    }

    public function loadModel($model)
    {
        $path = 'models/' . $model . 'Model.php';
        if (file_exists($path)) {
            require_once($path);

            $modelName = $model . 'Model';
            $this->model = new $modelName();
        }
    }
}
