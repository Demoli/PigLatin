<?php
class Request
{
    private $_queryParams = array();
    private $_postParams = array();
    
    public function  __construct()
    {
        foreach($_GET as $key=>$val) {
            $this->_queryParams[$key] = $val;
        }

        foreach($_POST as $key=>$val) {
            $this->_postParams[$key] = $val;
        }
    }

    public function getPostParam($key)
    {
        if(!key_exists($key, $this->_postParams)) {
            throw new Exception("Invalid POST param $key", 1);
        }

        return $this->_postParams[$key];
    }

    public function isPostRequest()
    {
        return $_SERVER['REQUEST_METHOD'] == 'POST';
    }
}