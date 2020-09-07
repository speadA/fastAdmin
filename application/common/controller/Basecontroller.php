<?php

namespace app\common\controller;

use think\Controller;
use think\Request;
use think\config;

class Basecontroller extends Controller
{
    protected $appKey;
    protected $appVersion;
    protected $openId;
    protected $accessToken;
    
    //当前请求类型
    protected $_method = '';
    //当前请求的资源类型
    protected $_type = '';
    //rest 允许请求的类型
    protected $allowMethod = ['get','post','put','deleted'];
    //默认请求类型
    protected $defaultMethod = 'post';
    //REST 允许请求的资源类型
    protected $allowType = ['xml','html','json','res'];
    //默认的资源类型
    protected $defaultType = 'html';
    //REST 允许输出的资源类型
    protected $allowOutputType =[
        'xml'=>'application/xml',
        'json'=>'application/json',
        'html'=>'text/html'
    ];
    
    
    /**Token校验
     * Basecontroller constructor.
     * @param Request|null $request
     */
    public function __construct(Request $request = null)
    {
        header('Access-Controller-Allow-Origin:*');
        
        $aToken = input('access_token');
        if($aToken!==config('app.access_token')){
            sendErr('201','请检查请求权限','accessToken error');
        }
    }
    
    /** ajax参数校验
     * @param $args array
     */
    public function ajaxError($args){
        if(is_array($args)){
            sendErr('201','ajax'.$args.'参数错误');
        }
        foreach ($args as $key=>$val){
            if(empty($val)){
               sendErr('201','ajax'.$key.'参数错误');
            }
        }
    }
    
    
    public function thinkChangePass($pass){
        $salt = config('passSalt');
        return md5(md5($pass.$salt));
    }
}
