<?php

namespace app\home\model;

use think\Model;

class Categorypage extends Model
{
    //
    //
    protected $autoWriteTimestamp=true;
    protected $updateTime='updatetime';
    protected $createTime='createtime';
    
    //首页轮播图片
    public  function getCarouseImgList(){
        //条数限制
        $num = '10';
        $res1 = $this->where('deleted','0')
            ->where('type','=',1)
            ->order('createtime','desc')
            ->limit($num)
            ->select()
            ->toArray();
        $res2 = $this->where('deleted','0')
            ->where('type','=',2)
            ->order('createtime','desc')
            ->limit($num)
            ->select()
            ->toArray();
        $res3 = $this->where('deleted','0')
            ->where('type','=',3)
            ->order('createtime','desc')
            ->limit($num)
            ->select()
            ->toArray();
        $res['people'] = $res1;
        $res['animals'] = $res2;
        $res['nature'] = $res3;
        return $res;
        
    }
}
