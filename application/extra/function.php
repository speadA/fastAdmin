<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: yunwuxin <448901948@qq.com>
// +----------------------------------------------------------------------

function testcommon()
{
    return 'this is function ';
}

/** 成功消息推送
 * @param int $code
 * @param string $mes
 * @return false|string
 */
function sendSuc($code=200,$mes='success',$memo='')
{
    $res = [
        'code'=>$code,
        'message'=>$mes,
        'memo'=>$memo,
    ];
    return json_encode($res);
}

/** 错误消息推送
 * @param int $code
 * @param string $mes
 * @return false|string
 */
function sendErr($code=203,$mes='error',$memo='请检查参数格式')
{
    $res = [
        'code'=>$code,
        'message'=>$mes,
        'memo'=>$memo,
    ];
    return json_encode($res);
}
/** 推送范感知
 * @param $url
 * @param $data
 */
function curlpostjson($url,$data)
{
    $headers = [
        "Content-type:application/json;charset='utf-8'",
        "Accept:application/json",
        "Cache-Control:no-cache",
        "Pragma:no-cache"
    ];

    $url = $url;
    $post_data = $data;
    $ch = curl_init();//初始化
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1); //post数量
    curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
    curl_setopt($ch,CURLOPT_POST,1);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$post_data);

    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

/** 客户端加密
 * @param string $info
 * @return false|string
 * 参考  https://www.cnblogs.com/dcb3688/p/4608008.html
 */
function setsecretkey($info='')
{
    if($info ==''|| !is_array($info) || empty($info)) return sendErr('203','error','请推送数据,并检查数据格式');
    if(isset($info['sign'])) unset($info['sign']);
    $array = $info;
//    客户端秘钥
    $appsecret = 'fadfgwetregr35345gg54534@fgtfd';
//    对加密数据进行字典排序
    foreach ($array as $key=>$value)
    {
        $arr[$key] = $value;
    }

    ksort($arr);//字典排序防止因为参数顺序不一致 导致加密不同

//    将key 和 value 拼接
    $str = "";
    foreach ($arr as $k=>$v)
    {
        $str = $str.$k.$v;
    }
//   通过sha1加密 并转化为大写
    $restr = $str.$appsecret;
    $sign = strtoupper(sha1($restr));
    return $sign;

}

/** sha 服务端签名解密
 * @param string $info
 * @return false|string
 * 秘钥 common 定义
 * 参考  https://www.cnblogs.com/dcb3688/p/4608008.html
 */
function checksecretkey($info='')
{
    if($info ==''|| !is_array($info) || empty($info)) return sendErr('203','error','请向验签中推送数据');
//    解析客户端传送的数据
//    $severyArray = json_decode($info,true);
    $severyArray =$info;
//    客户端签名
    $clientSign = $severyArray['sign'];
    unset($severyArray['sign']);
//    服务端秘钥
    $serverSecret = SECRETKEY;
//     生成服务端str
    foreach ($severyArray as $key=>$value)
    {
        $severyArr[$key] = $value;
    }
    ksort($severyArr);//字典排序防止因为参数顺序不一致 导致加密不同
    $str ="";
    foreach ($severyArr as $k => $v) {
        $str = $str.$k.$v;
    }

    $reserverstr=$str.$serverSecret;
    $reserverSign = strtoupper(sha1($reserverstr));
    if($clientSign!=$reserverSign){
//   签名不一致
       return sendErr('204','','你没有权限访问，请校验身份后访问');die;
    }else{
//   签名一致
        return 'success';
    }





}


/** 推送范感知
 * @param $url
 * @param $data
 */
function puttodatahub($url,$data)
{
    $url = $url;
    $post_data = $data;

    $ch = curl_init();//初始化

    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1); //post数量
    curl_setopt($ch,CURLOPT_POST,1);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$post_data);

    $output = curl_exec($ch);
    curl_close($ch);
}

/** pg 二维数组 批量写入数据库sql
 * 通过query 调用此批量写入方法
 * @param
 * @param $values
 */
    function pgInsertAllSql($table='bs_zz_gucunjdc',$values){
       /* $keys = [];
        $values = [
            [0]=>[
                'cameraid'=>'999',
                'camerasipid'=> "31011310011310066002",
                "cameraSipId"=>  "31011310011310066002",
                "resultType"=>  "1",
                "capture_time"=> "2019-08-19 02:32:55",
                "major_capture_image_url"=> "bbbbbbbbb",
                "minor_capture_image_url"=> "bbbbbbbbb",
                "Mistake"=> "车头",
                "PlateLicence"=> "粤DFQ037"
            ],
            [1]=>[
                'cameraid'=>'999',
                'camerasipid'=> "31011310011310066002",
                "cameraSipId"=>  "31011310011310066002",
                "resultType"=>  "2",
                "capture_time"=> "2019-08-19 02:32:55",
                "major_capture_image_url"=> "bbbbbbbbb",
                "minor_capture_image_url"=> "bbbbbbbbb",
                "Mistake"=> "车头",
                "PlateLicence"=> "粤DFQ037"
            ],
            [2]=>[
                'cameraid'=>'999',
                'camerasipid'=> "31011310011310066002",
                "cameraSipId"=>  "31011310011310066002",
                "resultType"=>  "3",
                "capture_time"=> "2019-08-19 02:32:55",
                "major_capture_image_url"=> "bbbbbbbbb",
                "minor_capture_image_url"=> "bbbbbbbbb",
                "Mistake"=> "车头",
                "PlateLicence"=> "粤DFQ037"
            ]
        ];*/
        foreach ($values as $vk =>$vl){
            $vsql = '(\''. implode($vl,"','").'\')';
            $vsqls[] = $vsql;
            $num = count($vl);
            if(is_array($vl)){
                foreach ($vl as $key2=>$val2){
                   if(is_array($val2)){
                       sendErr('201','写入数据格式错误');
                   }
                    $keys [] = $key2;
                    if(count($keys) > $num){
                        array_pop($keys);
                    }
                }
            }
        }
        $vsqls = implode($vsqls,',');
        $ksql = implode($keys,',');
        $ksqls = '('.$ksql.')';
        $insertSql = "insert into $table $ksqls VALUES $vsqls";

        return $insertSql;

    }




