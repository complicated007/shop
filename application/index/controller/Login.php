<?php
namespace app\index\controller;
use think\Controller;

class Login extends Controller
{
    public function login()
    {
    	return $this->fetch();

    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
