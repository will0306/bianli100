<?php

define('IN_ECS', true);

require(dirname(__FILE__) . '/../includes/init.php');

access_token($db);
$ret = $db->getRow("SELECT * FROM `wxch_config` WHERE `id` = 1");
$access_token = $ret['access_token'];
$type_media = 'image';
$upload_url = 'http://file.api.weixin.qq.com/cgi-bin/media/upload?access_token='.$access_token.'&type='.$type_media;
$post_data = array('media'=>'@'. dirname(__FILE__).'/../images/tenpayc2c.jpg');

$ret_json = curl_grab_page($upload_url,$post_data);

$ret = json_decode($ret_json);


$media_id = $ret->media_id;


$get_url = 'http://file.api.weixin.qq.com/cgi-bin/media/get?access_token='.$access_token.'&media_id='.$media_id;

$ret_media = curl_get_contents($get_url);

file_put_contents('test.jpg',$ret_media);

echo '<img src="test.jpg"/>';

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
        echo 1;
        $ret = json_decode($ret_json);
        if($ret->access_token){
            $db->query("UPDATE `wxch_config` SET `access_token` = '$ret->access_token',`dateline` = '$time' WHERE `id` =1;");
        }
    }
    elseif(empty($access_token))
    {
        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$appsecret";
        echo 2;
        $ret_json = curl_get_contents($url); //access_token 150
        $ret = json_decode($ret_json);
        if($ret->access_token){
            $db->query("UPDATE `wxch_config` SET `access_token` = '$ret->access_token',`dateline` = '$time' WHERE `id` =1;");
        }
    }

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
//    curl_setopt($ch, CURLOPT_TIMEOUT, 1);           //设置超时
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

function curl_grab_page($url,$data,$proxy='',$proxystatus='',$ref_url='')
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)");
    curl_setopt($ch, CURLOPT_TIMEOUT, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    if ($proxystatus == 'true') {
        curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, TRUE);
        curl_setopt($ch, CURLOPT_PROXY, $proxy);
    }
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_URL, $url);
    if(!empty($ref_url)){
        curl_setopt($ch, CURLOPT_HEADER, TRUE);
        curl_setopt($ch, CURLOPT_REFERER, $ref_url);
    }
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    ob_start();
    return curl_exec ($ch); // execute the curl command
    ob_end_clean();
    curl_close ($ch);
    unset($ch);
}