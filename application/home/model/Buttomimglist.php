<?php

namespace app\home\model;

use think\Model;

class Buttomimglist extends Model
{
    ///自动写入
    protected $createTime = 'createtime';
    protected $updatetime = 'updatetime';
    
    //数据获取
    public function getFirstButtomList(){
        
        $data = $this->where('deleted','=',0)
            ->limit(6)
            ->order('updatetime desc')
            ->select()
            ->toArray();
        if($data){
            return $data;
        }else{
            return '';
        }
        
    }
}
