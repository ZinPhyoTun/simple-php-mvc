<?php

class UserModel
{
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllUsers()
    {
        $this->db->to_prepare("SELECT * FROM mvc_app.users");

        return $this->db->multiSet();
    }
}