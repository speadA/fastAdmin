<?php
/**
 * Created by PhpStorm.
 * User: leader
 * Date: 2019/7/4
 * Time: 16:22
 */

namespace app\api\controller;


use app\common\controller\Api;

class Booktest extends Api
{
    // 无需鉴权的接口,*表示全部
//    protected $noNeedRight = ['*'];
    // 无需登录的接口,*表示全部
//    protected $noNeedLogin = ['test', 'test1'];
    protected $noNeedLogin = ['*'];
    
    public function book(){
        //对前端数据传输方式进行辨认
        if(request()->isPost())
        {
            //变量取参
            $data['PatientName'] = request()->Post('PatientName');
            $data['Date'] = request()->Post('Date');
            $data['Time'] = request()->Post('Time');
            $data['Phone']= request()->Post('Phone');
            $data['Departments']= request()->Post('Departments');
            if(!empty($data)){
                $Booklist = new \app\admin\model\Booklist();
                $res = $Booklist->addBook($data);
               if($res=='success') return $this->success();
               return $this->error('数据写入失败','','201');
            }
            return $this->error('请完善预约人信息','预约人信息不全','202');
        }
        return $this->error('请完善预约人信息','预约人信息不全','203');
    }
    
    public function getList(){
        $Booklist = new \app\admin\model\Booklist();
        $res = $Booklist->getBookList();
        
        dump($res);
        die;
        
        
    }
}