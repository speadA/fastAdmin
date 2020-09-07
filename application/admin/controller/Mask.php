<?php

namespace app\admin\controller;

use app\common\controller\Backend;

/**
 * 插件管理
 *
 * @icon fa fa-circle-o
 * @remark 可在线安装、卸载、禁用、启用插件，同时支持添加本地插件。FastAdmin已上线插件商店 ，你可以发布你的免费或付费插件：<a href="https://www.fastadmin.net/store.html" target="_blank">https://www.fastadmin.net/store.html</a>
 */
class Mask extends Backend
{

    protected $model = null;
    protected $typeList = '';

    public function _initialize()
    {
        parent::_initialize();
        $this->model = new \app\admin\model\Mask();
    }

    /**
     * 列表
     */
    public function index()
    {
        if ($this->request->isAjax()) {
            $res = $this->model->getAll();
            if($res){
                foreach($res as $key=>$val){
                    $res[$key]['createtime']=date("F j Y H:i", intval($val['createtime']));
                    $res[$key]['updatetime']=date("F j Y H:i", intval($val['updatetime']));
                }
            }
            $result = array("total" => count($res), "rows" => $res);
            return json($result);
        }
        return $this->view->fetch();
    }
    /**
     * 新建
     */
    public  function add (){
        if ($this->request->isPost()) {
            $post = $this->request->post();
            $data['logo']=$post['row']['image'];
            $data['status']= $post['row']['status'] == 'enable' ? 'enable' : 'disable' ;
            $data['createtime']= time();
            $data['updatetime']= time();
            $result = $this->model->allowField(true)->save($data);
            if ($result !== false) {
                $this->success();
            } else {
                $this->error($this->model->getError());
            }
        }
        return $this->view->fetch();
    }

    /**
     * 编辑
     */
    public function edit($ids=NULL){
        $row = $this->model->get($ids);
        if ($this->request->isPost()) {
            $post = $this->request->post();
            $rows = $this->model->get($post['row']['id']);
            $data['logo']=$post['row']['image'];
            $data['status']= $post['row']['status'] ==  'enable' ? 'enable' : 'disable' ;
            $data['updatetime']= time();
            $result = $rows->allowField(true)->save($data);
            if ($result !== false) {
                $this->success();
            } else {
                $this->error($this->model->getError());
            }
        }
        $this->assign('row',$row);
        return $this->view->fetch();
    }


    public function del($ids=NULL){
        $ids = $this->request->post('ids');
        if($ids){
           $del =  $this->model->where('id', 'in',$ids)->delete();
            if ($del !== false) {
                $this->success();
            } else {
                $this->error($this->model->getError());
            }
        }
    }

}
