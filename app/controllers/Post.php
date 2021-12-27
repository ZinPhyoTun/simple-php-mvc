<?php

class Post extends Controller
{
    public function __construct()
    {
        $this->postModel = $this->model("PostModel");
    }

    public function index($params = [])
    {
        $posts = $this->postModel->getAllPosts();
        $this->view("post/index", $posts);
    }
}