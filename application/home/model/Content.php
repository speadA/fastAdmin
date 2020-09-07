<?php

namespace app\home\model;

use think\Model;

class Content extends Model
{
    protected $autoWriteTimestamp=true;
    protected $updateTime='updatetime';
    protected $createTime='createtime';
    
    //首页轮播图片
    public  function get_home(){
        //条数限制
        $num = '4';
        $res = $this->where('status','enable')
            ->where('type','=','home')
            ->order('createtime','desc')
            ->limit($num)
            ->select()
            ->toArray();
        return $res;
    }

    public function get_home_tips(){
        $res = $this->where('status','enable')
            ->where('type','=','travaltips')
            ->order('createtime','desc')
            ->limit(2)
            ->select()
            ->toArray();
        return $res;
    }


    public  function get_type_content($type='',$num=0){
        $limit=($num-1) *2;
        $res = $this->where('status','enable')
            ->where('type','=',$type)
            ->order('createtime','desc')
            ->limit($limit,2)
            ->select()
            ->toArray();
        if($res){
            foreach($res as $key=>$val){
                $res[$key]['createtime']=date("F j Y", intval($val['createtime']));
                $res[$key]['updatetime']=date("F j Y", intval($val['updatetime']));
            }
        }
        return $res;
    }

    public  function get_content_one($id=''){
        $res = $this->where('status','enable')
            ->where('id','=',$id)
            ->order('createtime','desc')
            ->select()
            ->toArray();
        return $res;
    }
}
