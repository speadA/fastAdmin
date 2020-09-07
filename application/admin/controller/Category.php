<?php

namespace app\admin\controller;

use app\admin\model\Categorypage;
use app\common\controller\Backend;
use fast\Http;
use think\addons\AddonException;
use think\addons\Service;
use think\Cache;
use think\Config;
use think\Exception;

/**
 * 插件管理
 *
 * @icon fa fa-circle-o
 * @remark 可在线安装、卸载、禁用、启用插件，同时支持添加本地插件。FastAdmin已上线插件商店 ，你可以发布你的免费或付费插件：<a href="https://www.fastadmin.net/store.html" target="_blank">https://www.fastadmin.net/store.html</a>
 */
class Category extends Backend
{

    protected $model = null;

    public function _initialize()
    {
        parent::_initialize();
    }

    /**
     * 查看
     */
    public function index()
    {
        if ($this->request->isAjax()) {
            $category = new Categorypage();
            $res = $category->getAll();
            $result = array("total" => 12, "rows" => $res);
            return json($result);
        }
        $this->assign('typeList','');
        return $this->view->fetch();
    }

    public  function add (){

        $this->assign('typeList',array(1,2,3,4,5,6));
        $this->assign('parentList',array(1,2,3,4,5,6));
        $this->assign('flagList',array(1,2,3,4,5,6));
        return $this->view->fetch();
    }

}
