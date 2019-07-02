<?php
namespace app\admin\controller;
use gmars\rbac\Rbac;
class Index extends Common
{
    public function index()
    {
    	$rbac = new rbac();
        return $this->fetch();
    }
}

