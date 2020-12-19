<?php

namespace App\Controller;

use App\Model\RegisterModel;

class RegisterController
{

    public function __construct()
    {
        $this->model = new RegisterModel();
    }

    public function createUser($datas)
    {
        if (
            array_key_exists("username", $datas)
            && array_key_exists("email", $datas)
            && array_key_exists("password", $datas)
        ) {
            $this->model->register(
                htmlspecialchars($datas['username']),
                htmlspecialchars($datas['email']),
                htmlspecialchars($datas['password'])
            );
        }
    }
}
