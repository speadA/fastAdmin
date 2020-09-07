<?php
/**
 * Created by PhpStorm.
 * User: leader
 * Date: 2020/4/4
 * Time: 22:01
 */

namespace app\home\controller;


use think\View;

class Mouse
{
    public function index()
    {
        echo 'home->Mouse->index';
        $view = new View();
        return $view->fetch('home/mouse');
    }
}