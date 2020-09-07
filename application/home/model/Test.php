<?php

namespace app\home\model;

use think\Model;

class Test extends Model
{
    //
    protected $table = 'test';
    protected $createTime = 'createtime';
    protected $updateTime = 'updatetime';
    
    
    public function tesmodel(){
    
        $res = Test::get(1);
        return $res;
        
    }
    
    
}
