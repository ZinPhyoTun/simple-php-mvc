<?php

class Home extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model("UserModel");
    }

    public function index($params = [])
    {
        $users = $this->userModel->getAllUsers();
        $this->view("home/index", $users);
    }
}