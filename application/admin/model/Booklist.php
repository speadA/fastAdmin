<?php

namespace app\admin\model;

use think\Model;

class Booklist extends Model
{
    // 表名
    protected $name = 'booklist';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = 'updatetime';
    
    // 追加属性
    protected $append = [
        'status_text'
    ];
    

    
    public function getStatusList()
    {
        return ['0' => __('Status 0'),'1' => __('Status 1')];
    }     


    public function getStatusTextAttr($value, $data)
    {        
        $value = $value ? $value : (isset($data['status']) ? $data['status'] : '');
        $list = $this->getStatusList();
        return isset($list[$value]) ? $list[$value] : '';
    }

    public function addBook($data){
        //时间格式处理
        $a = time($data['Date']);
        $data['Date'] = date('Y-m-d',$a);
        $b = time($data['Time']);
        $data['Time'] = date('Y-m-d h:i:s',$data['Date']+$b);
        //新增预约数据
        $res = self::create(
            [
                'patientname'  =>  $data['PatientName'],
                'bookdate'  =>  $data['Date'],
                'booktime'  =>  $data['Time'],
                'phone'  =>  $data['Phone'],
                'departments'  =>  $data['Departments'],
            ]
        );
        
        if($res) return 'success';
        return 'error';
    }
    
    public function getBookList(){
        $count = 3;
        $a = $this::paginate(2,99)->toArray();
//        limit para1:页码 para2:条数
        $b = $this::limit('2,3')->select()->toArray();
//        page  para1:页码 para2:条数
        $c = $this::page('1,2')->select()->toArray();
        
        $d = $this::page('2,2')->select()->toArray();
//        dump($b->toArray());die;
        dump($a);
        dump($b);
        dump($c);
        dump($d);
        die;
        return $list;
        die;
    }

}
