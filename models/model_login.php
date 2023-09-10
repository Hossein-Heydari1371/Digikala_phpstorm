<?php

class model_login extends Model
{
    function __construct()
    {
        parent::__construct();

    }
    function checkUserLogin()
    {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "select *from tbl_users where email=? and password=? ";
        $param = [$email, $password];
        $user = $this->doSelect($query, $param, 1);

        if ($user != '') {
            Model::sessionInit();
            Model::sessionSet('user_id', $user['id']);

        }
    }

}