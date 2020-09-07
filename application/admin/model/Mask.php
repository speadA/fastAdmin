<?php

namespace app\admin\model;

use think\Model;

class Mask extends Model
{
    // 表名
    protected $name = 'mask';
    
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
        $res = $this
            ->order('createtime','desc')
            ->limit($num)
            ->select()
            ->toArray();
        return $res;
    }


    public static function get($data, $with = [], $cache = false)
    {
        if (is_null($data)) {
            return;
        }
        if (true === $with || is_int($with)) {
            $cache = $with;
            $with  = [];
        }
        $query = static::parseQuery($data, $with, $cache);
        return $query->find($data);
    }
     public function del(){

     }
}
