<?php
class Main extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function main()
    {
        $data = $this->model->getAll();
        $this->view->message = $data;
        $this->view->render('main/index');
    }
    public function hola()
    {

        $this->view->render('main/hola');
    }
}
