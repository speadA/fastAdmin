<?php

namespace app\home\model;

use app\common\model\Basemodel;
use think\Model;

class Doveintroduce extends Basemodel
{
    //自动更新字段
    protected $createTime = 'createtime';
    protected $updateTime = 'updatetime';
    
    //数据获取
    public function getIntruduce(){
    
        $data = $this->where('deleted','=',0)
            ->limit(1)
            ->order('updatetime desc')
            ->find()
            ->toArray();
        if($data){
            return $data;
        }else{
            return '';
        }
        
    }
    
}
