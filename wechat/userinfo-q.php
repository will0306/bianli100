<?php

define('IN_ECS', true);

require(dirname(__FILE__) . '/../includes/init.php');

$wxid = !empty($_GET['wxid']) ? $_GET['wxid'] : '';

if(!empty($wxid))
{
    access_token($db);
    $ret = $db->getRow("SELECT * FROM `wxch_config` WHERE `id` = 1");
    $access_token = $ret['access_token'];
    $url = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=$access_token&openid=$wxid";
    $res_json = curl_get_contents($url);
    $w_user = json_decode($res_json,TRUE);
//    print_r($w_user);exit;
    if($w_user['errcode'] == '40001')
    {
        $access_token = new_access_token($db);
        $url = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=$access_token&openid=$wxid";
        $res_json = curl_get_contents($url);
        $w_user = json_decode($res_json,TRUE);
    }
//
//    $headimgurl = curl_get_contents($w_user[headimgurl]);
//    $localimgurl = wxch_file($img);
    $ecs_users = $ecs->prefix.'users';
    $w_sql = "UPDATE  `wxch_user` SET  `nickname` =  '$w_user[nickname]',`sex` =  '$w_user[sex]',`city` =  '$w_user[city]',`country` =  '$w_user[country]',`province` =  '$w_user[province]',`language` =  '$w_user[language]',`headimgurl` =  '$w_user[headimgurl]',`localimgurl` = '$localimgurl', `subscribe_time` =  '$w_user[subscribe_time]' WHERE `wxid` = '$wxid';";
    $db->query($w_sql);
    $w_users = "UPDATE  ".$ecs_users." SET  `user_name` =  '$w_user[nickname]'  WHERE `wxid` = '$wxid';";
    $db->query($w_users);
    
}


function wxch_file($upload)
{
    $dir = date('Ymdh');
    $img_path = 'images'. '/' . $dir . '/';
    $dir = ROOT_PATH . 'images'. '/' . $dir . '/';
    
    if (!file_exists($dir))
        {
            if (!make_dir($dir))
            {
                /* 创建目录失败 */
                $this->error_msg = sprintf($GLOBALS['_LANG']['directory_readonly'], $dir);
                $this->error_no  = ERR_DIRECTORY_READONLY;

                return false;
            }
        }
    $file_name = random_filename();
    $path_name = $dir.$file_name;
    file_put_contents($path_name,$upload);
    $img_name = $img_path.$file_name;
    return $img_name;
}


function random_filename()
{
    $str = '';
    for($i = 0; $i < 9; $i++)
    {
        $str .= mt_rand(0, 9);
    }

    return gmtime() . $str.'.jpg';
}

function access_token($db)
{
    $ret = $db->getRow("SELECT * FROM `wxch_config` WHERE `id` = 1");
    $appid = $ret['appid'];  //AppId 18
    $appsecret = $ret['appsecret'];//AppSecret 32
    $access_token = $ret['access_token'];
    $dateline = $ret['dateline'];
    $time = time();
    
//    echo ($time - $dateline);exit;
    if(($time - $dateline) >= 7200)
    {
        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$appsecret";
    
        $ret_json = curl_get_contents($url); //access_token 150
        $ret = json_decode($ret_json);
        if($ret->access_token){
            $db->query("UPDATE `wxch_config` SET `access_token` = '$ret->access_token',`dateline` = '$time' WHERE `id` =1;");
        }
    }
    elseif(empty($access_token))
    {
        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$appsecret";
    
        $ret_json = curl_get_contents($url); //access_token 150
        $ret = json_decode($ret_json);
        if($ret->access_token){
            $db->query("UPDATE `wxch_config` SET `access_token` = '$ret->access_token',`dateline` = '$time' WHERE `id` =1;");
        }
    }
//    print_r($ret);exit; acc
    
}

function new_access_token($db)
{
    $ret = $db->getRow("SELECT * FROM `wxch_config` WHERE `id` = 1");
    $appid = $ret['appid'];  //AppId 18
    $appsecret = $ret['appsecret'];//AppSecret 32
    $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$appsecret";
    
        $ret_json = curl_get_contents($url); //access_token 150
        $ret = json_decode($ret_json);
        if($ret->access_token){
            $db->query("UPDATE `wxch_config` SET `access_token` = '$ret->access_token',`dateline` = '$time' WHERE `id` =1;");
        }
        return $ret->access_token;
}

function curl_get_contents($url)   
{   
    $ch = curl_init();   
    curl_setopt($ch, CURLOPT_URL, $url);            //设置访问的url地址     
    curl_setopt($ch, CURLOPT_TIMEOUT, 1);           //设置超时   
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:26.0) Gecko/20100101 Firefox/26.0");   //用户访问代理 User-Agent   
    curl_setopt($ch, CURLOPT_REFERER,$url);        //设置 referer   
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);      //跟踪301   
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);        //返回结果  
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    $r = curl_exec($ch);   
    curl_close($ch);   
    return $r;   
}  