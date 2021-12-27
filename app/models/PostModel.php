<?php

class PostModel
{
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllPosts()
    {
        $this->db->to_prepare("SELECT * FROM mvc_app.posts");
        return $this->db->multiSet();
    }
}