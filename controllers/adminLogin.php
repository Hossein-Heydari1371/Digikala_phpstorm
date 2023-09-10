<?php

class adminLogin extends Controller
{
    function __construct()
    {
        parent::__construct();

    }

    function index()
    {
        $this->getView('admin/login/index', [], 1, 1);

    }

    function checkUserLogin()
    {

        if ($_POST['email'] !== '') {
            $this->model->checkUserLogin($_POST);

            $user = Model::sessionGet('user_id');

            if ($user == false) {
                header('location:' . BASE . 'adminLogin/index');
            } else {
                header('location:' . BASE . 'adminOrder/index');
            }
        }
    }
}
