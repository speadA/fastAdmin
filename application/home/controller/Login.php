<?php

namespace app\home\controller;

use app\common\controller\Basecontroller;
use app\common\model\User;
use think\Exception;
use think\Log;
use think\Request;

class Login extends Basecontroller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $file = \request()->file('wj');
        $info = $file->move('../public/uploads');
        dump($info->getSaveName());
        dump($info->getPathname());
        dump($info);
        dump($info);
        die;
    }
    
    /**
     * 图片上传
     *
     * @return \think\Response
     */
    public function fileUpload()
    {
        //wj input上传文件 键名
        $file = \request()->file('wj');
        $info = $file->move('../public/uploads');
        
        $saveFileName = $info->getSaveName();
        $saveFilePath = $info->getPathname();
       
        die;
    }
    
    public function checkLoginAuth(){
        try{
            if(\request()->isPost()){
                // 用户数据
                $userName = trim(input('username'));
                $passWord = trim(input('password'));
        
                // 是否已登陆校验
                $User = new User();
                $userInfo = $User->getUserInfo($userName);
                // 用户名校验
                if(!$userInfo){
                    return  sendErr('201','用户不存在');
                }
        
                // 密码校验
                if($this->thinkChangePass($passWord)!==$userInfo['password']){
                    return  sendErr('202','密码错误');
                }
        
                // 用户权限校验（是否禁用）
                if(1!==$userInfo['deleted']){
                    return  sendErr('203','该用户已被禁用！');
                }
                //校验成功 跳转 。。。。
                return sendSuc('200','Login_ok');
            }else{
                return sendErr('501','error');
            }
        }catch (Exception $e){
            Log::write($e->getMessage());
            return sendErr('500','系统错误，请联系管理员后再尝试。');
        }
        
        
        
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
