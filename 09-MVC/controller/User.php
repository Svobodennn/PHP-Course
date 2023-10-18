<?php

require DIR.'/model/UserModel.php';


class User
{
    public function List(){

            $userModel = new UserModel();
            $data = $userModel->listUsers();
//            echo "<pre>";
//            print_r($data);
        require 'view/UserList.php';
    }
    public function Add(){

            echo "User:Add";
    }
}