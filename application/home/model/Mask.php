<?php

namespace app\home\model;

use think\Model;
use think\Db;

class Mask extends Model
{
    protected $autoWriteTimestamp=true;
    protected $updateTime='updatetime';
    protected $createTime='createtime';
    
    //首页轮播图片
    public  function get_mask_one(){
        $res = Db::query("SELECT logo FROM fa_mask where status = 'enable' ORDER BY RAND() LIMIT 1");
        return $res;
    }


}
