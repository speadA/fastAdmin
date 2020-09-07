<?php

namespace app\home\controller;

use app\common\controller\Basecontroller;
use app\home\model\Content;
use app\home\model\Mask;
use think\Request;
use think\View;

class Index extends Basecontroller
{
    /**
     * 显示资源列表
     * moran
     * @return \think\Response
     */
    public function index()
    {
        $isDefull=1;
        $content = new Content();
        $data = $content->get_home();
        $tips = $content->get_home_tips();
        if($data){
            foreach($data as $key=>$val){
                $data[$key]['createtime']=date("F j Y", intval($val['createtime']));
                $data[$key]['updatetime']=date("F j Y", intval($val['updatetime']));
            }
        }
        $view = new View();
        $view->assign('data',$data);
        $view->assign('tips',$tips);
        if($isDefull){
            $mask = new Mask();
            $video = $mask->get_mask_one();
            $view->assign('video',$video[0]['logo']);
        }else{
            $view->assign('video','');
        }
        $view->assign('status',$isDefull);
        return $view->fetch('home/index');
    }

    public function lists(){
        $get = $_REQUEST;
        $view = new View();
        $content = new Content();
        $data = $content->get_type_content($get['type'],isset($get['page']) ? $get['page'] : 1);
        if(!count($data) > 0){
            $content = new Content();
            $data = $content->get_home();
            $tips = $content->get_home_tips();
            if($data){
                foreach($data as $key=>$val){
                    $data[$key]['createtime']=date("F j Y", intval($val['createtime']));
                    $data[$key]['updatetime']=date("F j Y", intval($val['updatetime']));
                }
            }
            $view->assign('data',$data);
            $view->assign('tips',$tips);
            $view->assign('status',0);
            return $view->fetch('home/index');
        }
        $type=$data[0]['type'];

        $count = ceil(count($data)/2);
        $view->assign('type',$type);
        $view->assign('totalPages',$count);
        $view->assign('page',isset($get['page']) ? $get['page'] : 1);  //当前页数
        $view->assign('data',$data);
        return $view->fetch('home/list');
    }

    public function details(){
        $get = $_REQUEST['id'];
        $content = new Content();
        $data = $content->get_content_one($get);
        $res = ['sketch'=>$data[0]['sketch'],'content'=>$data[0]['content']];
        $view = new View();
        $view->assign('res',$res);
        return $view->fetch('home/detail');
    }


}


