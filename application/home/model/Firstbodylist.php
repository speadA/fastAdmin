<?php

namespace app\home\model;

use think\Config;
use think\Model;

class Firstbodylist extends Model
{
    //自动写入
    protected $createTime = 'createtime';
    protected $updatetime = 'updatetime';
    
    //类库引入
    protected $carouseimglist;
    
    public function initialize()
    {
        parent::initialize();
        $this->carouseimglist = \model('carouseimglist');
        // 独立配置加载
        Config::load(APP_PATH.'home/config/config.php');
    }
    
    //类型获取器
    protected function getTypeAttr($value,$firstType){
        
        $type = config('firstType');
        return $type[$value];
    }
    
    //数据获取
    public function getFirstBodyList(){
        
        $data = $this->where('deleted','=',0)
            ->limit(6)
//            ->page(2,2)
            ->order('updatetime desc')
            ->select()
            ->toArray();
        if($data){
            return $data;
        }else{
            return '';
        }
    }
    
    public function test()
    {
        $res = $this->carouseimglist->where('id','>','0')
            ->limit(2)
            ->select()
            ->toArray();
        
        var_dump($res);
    }
}
