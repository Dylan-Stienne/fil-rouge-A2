<?php

namespace App\Model;

use Core\Database;

class LoginModel extends Database
{

    public function login($email, $password)
    {
        $datas = array(
            "email" => $email,
            "_password" => hash("sha256", $password)
        );
        $info = $this->query("SELECT id FROM users WHERE email = :email AND `password` = :_password", $datas, true);
        if ($info != false && array_key_exists("id", $info)) {
            $_SESSION["id"] = $info->id;
            $datas = array("id" => $info->id);
            $req = $this->prepare("UPDATE users SET is_connected = 1 WHERE id = :id", $datas);

            echo json_encode($req);
            return $req;
        }
        echo json_encode(false);
        return false;
    }

    public function logOut()
    {
        if (array_key_exists("id", $_SESSION)) {
            $datas = array("id" => $_SESSION['id']);
            $this->prepare("UPDATE users SET is_connected = 0 WHERE id = :id", $datas);
            session_destroy();
        }

        echo json_encode(true);
        return true;
    }
}
