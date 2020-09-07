<?php

namespace app\home\controller;

use app\common\controller\Basecontroller;
use app\home\model\Firstbodylist;
use think\Config;
use think\Controller;
use think\Request;
use think\View;

class Test extends Basecontroller
{
    public function tes1(){
       return $this->fetch('test/testa');
        return json_encode('hello');
    }
    
    public function tes2(){
//        dump(APP_PATH.'home/config/config/php');
//        $a = Config::load(APP_PATH.'home/config/config.php');
//        dump($a);
//        dump(config('fistTpye'));
//        dump(config('fistTpyea'));
//        die;
        
//        $Firstbody = new Firstbodylist();
//        $data = $Firstbody->getFirstBodyList();
//        dump(list_to_tree($data));
        str_repeat(chr(0), 16);die;
        $pass = 'admin';
        $changePass = $this->thinkChangePass($pass);
        
        dump($changePass);die;
        $module = request()->module();
        $action = request()->url();
        $param = request()->param() ? json_encode(request()->param()) : '';
//        $title = self::$title;
//        $content = self::$content;
        $data = [
            'module'    => $module,
            'action'    => $action,
            'param'     => $param,
//            'title'     => $title,
//            'content'   => $content
        ];
        
        dump($data);
        dump(\request());
        die;
        self::create([
//            'admin_id'  => $aid,
//            'username'  => $username,
            'module'    => $module,
            'action'    => $action,
            'param'     => $param,
            'title'     => $title,
            'content'   => $content,
            'ip'        => request()->ip(1),
            'user_agent' => request()->server('HTTP_USER_AGENT')
        ]);
        
        
        
    }
    
    public function tes(){
//        echo ' this is home Test tes';
        $tes = new \app\home\model\Test();
        $res = $tes->tesmodel()
            ->where('id','>','0')
            ->limit(5)
            ->select()
            ->toArray();
        echo $tes->getLastSql();
        dump($res);
    
        return json_encode($res);
    }
    
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $list = [];
        $Carouse = new \app\home\model\Carouseimglist();
        $res = $Carouse->getCarouse();
        foreach ($res as $key=>$val){
            $data['title'] = $val['title'];
            $data['des1'] = $val['des1'];
            $data['des2'] = $val['des2'];
            $data['path'] = $val['path'];
            $data['hreftitle'] = $val['hreftitle'];
            $data['hrefa'] = $val['hrefa'];
            $list[] = $data;
        }
//        dump($list);die;
        $view = new View();
        $view->assign('data',$list);
        return $view->fetch('test/index');
    }
    
    public function imgFirst(){
        $view = new View();
        return $view->fetch('test/index-1');
    }
    
    public function imgSecond(){
        $view = new View();
        return $view->fetch('test/index-2');
    }
    
    public function imgThird(){
        $view = new View();
        return $view->fetch('test/index-3');
    }
    
    public function imgFourth(){
        $view = new View();
        return $view->fetch('test/index-4');
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
