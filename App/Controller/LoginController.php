<?php

namespace App\Controller;

use App\Model\LoginModel;

class LoginController
{

    public function __construct()
    {
        $this->model = new LoginModel();
    }

    public function login($datas)
    {
        if (
            array_key_exists("email", $datas)
            && array_key_exists("password", $datas)
        ) {
            $this->model->login(
                htmlspecialchars($datas['email']),
                htmlspecialchars($datas['password'])
            );
        }
    }

    public function logOut()
    {
        $this->model->logOut();
    }
}
