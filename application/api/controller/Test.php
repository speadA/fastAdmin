<?php

namespace app\api\controller;

use app\common\controller\Api;
use think\Controller;

/**
 * 首页接口
 */
class Test extends Controller
{

    protected $noNeedLogin = ['*'];
    protected $noNeedRight = ['*'];

    /**
     * 首页
     * 
     */
    public function index()
    {
        $this->success('请求成功');
    }
    
    public function test()
    {
        return $this->fetch('/test');
//        echo 'test';die;
    }
    public function testHis()
    {
        return $this->fetch('/historyCompany/index');
//        echo 'test';die;
    }

}
