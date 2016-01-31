<?php

/**
 *
 * wxch_back.php UTF-8
 * User: djks
 * Date: 2014-1-3
 * link http://www.weixincaihong.com
 *
 */
define('IN_ECS', true);

if(!empty($_SESSION['wxch_oid']))
{
    $oid = $_SESSION['wxch_oid'];
}
else
{
    $oid = $_GET['oid'];
}


require (dirname(__FILE__) . '/../../includes/init.php');

$wxch_config = $db->getRow("SELECT * FROM `wxch_config` WHERE `id` = 1");

$appid = $wxch_config['appid'];

$appsecret = $wxch_config['appsecret'];

$code = !empty($_GET['code']) ? $_GET['code'] : '';


$url = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid='.$appid.'&secret='.$appsecret.'&code='.$code.'&grant_type=authorization_code';

$ret_json = curl_get_contents($url);

$ret = json_decode($ret_json);

$openid = $ret->openid;
$access_token = $ret->access_token;
$cfg_baseurl = $db->getOne("SELECT cfg_value FROM wxch_cfg WHERE cfg_name = 'baseurl'");
$cfg_murl = $db->getOne("SELECT cfg_value FROM wxch_cfg WHERE cfg_name = 'murl'");
//$url = 'https://api.weixin.qq.com/sns/userinfo?access_token='.$access_token.'&openid='.$openid;
//$ret_json = curl_get_contents($url);

$back_url = $db->getOne("SELECT `contents` FROM `wxch_oauth` WHERE `oid` = '$oid'");
$affiliate_id = $db->getOne("SELECT `affiliate` FROM `wxch_user` WHERE `wxid` = '$fromUsername'");
if($affiliate_id>=1)
{
    $affiliate = '&u='.$affiliate_id;
    $back_url = $back_url.$affiliate;
}



$update_sql = "UPDATE `wxch_oauth` SET `count` = `count` + 1 WHERE `oid` = $oid; ";

$db->query($update_sql);

if(!empty($openid) && strlen($openid) == 28){
    $oauth_step = $db->getOne("SELECT `setp` FROM `wxch_user` WHERE `wxid` = '$openid'");
    $wxch_ecs = $ecs->table('users');
    if($oauth_step == 3)
    {
        $w_res = $db->getRow("SELECT * FROM  ".$wxch_ecs." WHERE `wxch_bd` = 'ok' AND `wxid` = '$openid'");
    }
    else
    {
        $w_res = $db->getRow("SELECT * FROM  ".$wxch_ecs." WHERE `wxch_bd` = 'no' AND `wxid` = '$openid'");
    }


    $is_login = 0;

    if ($is_login == 0)
    {
        $user->login($w_res['user_name'], null, true);
        update_user_info();
        recalculate_price();
        $is_login = 1;
    }
    if($is_login == 0)
    {
        $user->set_session($w_res['user_name']);
        $user->set_cookie($w_res['user_name']);
        update_user_info();
        recalculate_price();
        $is_login = 1;
    }
    $_SESSION['wxid'] = $openid;
}



//echo $w_res;


header("HTTP/1.1 301 Moved Permanently");
header("Location: $back_url");
exit;

function curl_get_contents($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);            //设置访问的url地址
    //curl_setopt($ch,CURLOPT_HEADER,1);            //是否显示头部信息
    curl_setopt($ch, CURLOPT_TIMEOUT, 1);           //设置超时
    curl_setopt($ch, CURLOPT_USERAGENT, _USERAGENT_);   //用户访问代理 User-Agent
    curl_setopt($ch, CURLOPT_REFERER,_REFERER_);        //设置 referer
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);      //跟踪301
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);        //返回结果
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    $r = curl_exec($ch);
    curl_close($ch);
    return $r;
}