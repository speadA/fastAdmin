<?php

namespace app\home\model;

use think\Model;

class Carouseimglist extends Model
{
    //
    protected $autoWriteTimestamp=true;
    protected $updateTime='updatetime';
    protected $createTime='createtime';
    
    //首页轮播图片
    public  function getCarouse(){
        //条数限制
        $num = '3';
        $res = $this->where('deleted','0')
            ->order('createtime','desc')
            ->limit($num)
            ->select()
            ->toArray();

        return $res;
        
    }
    
}
