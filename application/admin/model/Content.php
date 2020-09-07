<?php

namespace app\admin\model;

use think\Model;

class Content extends Model
{
    // 表名
    protected $name = 'content';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = 'updatetime';
    
    // 追加属性
    protected $append = [

    ];
    public $typeList = ['home','travelnews','destination','travelideas','foodanddrink','video','travaltips'];

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






}
