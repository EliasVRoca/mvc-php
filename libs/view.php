<?php
class View
{
    public $message;

    function __construct()
    {
    }

    public function render($name)
    {
        $view = 'views/' . $name . '.php';
        if (file_exists($view)) {
            require_once($view);
        }
    }
}
