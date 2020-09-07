<?php

namespace app\admin\model;

use think\Model;

class Categorypage extends Model
{
    // 表名
    protected $name = 'category';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = 'updatetime';
    
    // 追加属性
    protected $append = [

    ];

    public  function getAll(){
        //条数限制
        $num = '100';
        $res = $this->where('status','normal')
            ->order('createtime','desc')
            ->limit($num)
            ->select()
            ->toArray();

        return $res;
    }

    







}
