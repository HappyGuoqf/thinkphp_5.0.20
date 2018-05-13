<?php
namespace app\admin\controller;
use think\Controller;
class Login extends Controller
{
	public function _initialize(){
		echo 88881;
	}

    public function index()
    {
        //return '后台登录';
         return $this->fetch();
    }
}
