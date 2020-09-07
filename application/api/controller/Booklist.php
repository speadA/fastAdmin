<?php
/**
 * Created by PhpStorm.
 * User: leader
 * Date: 2019/7/4
 * Time: 16:17
 */

namespace app\api\controller;


use app\common\controller\Api;

class Booklist extends Api
{
    // 无需登录的接口,*表示全部
    protected $noNeedLogin = ['test', 'test1'];
    // 无需鉴权的接口,*表示全部
    protected $noNeedRight = ['test2'];
    
    
    public function test(){
        echo date('y-m-d',time());
        die;
    }
    
}