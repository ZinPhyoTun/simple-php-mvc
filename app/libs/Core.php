<?php

class Core
{
    private $className = "Home";
    private $methodName = "index";

    public function __construct()
    {
        $this->getUrl();
    }

    public function getUrl()
    {
        $url_query_string = $_GET['url'] ?? "";
        
        $url_array = explode("/", trim($url_query_string, "/"));

        if (!empty($url_array[0]))
        {
            if (file_exists("../app/controllers/". ucfirst($url_array[0]) .".php"))
            {
                $this->className = ucfirst($url_array[0]);
                unset($url_array[0]);
            }
        }

        require_once "../app/controllers/". $this->className .".php";

        $this->className = new $this->className;

        if (!empty($url_array[1]))
        {
            if (method_exists($this->className, $url_array[1]))
            {
                $this->methodName = $url_array[1];
                unset($url_array[1]);
            }
        }

        $params = !empty($url_array) ? array_values($url_array) : [];

        call_user_func([$this->className, $this->methodName], $params);
    }
}