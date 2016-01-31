<?php

/**
 * 
 * wxch_oauth.php UTF-8
 * User: djks
 * Date: 2014-1-3
 * link http://www.weixincaihong.com
 * 
 */
define('IN_ECS', true);

require (dirname(__FILE__) . '/../../includes/init.php');

$uri = !empty($_GET['uri']) ? $_GET['uri'] : '';

if(empty($uri))
{
    exit("uri is empty");
}

if($_GET['u'])
{
    $uri = $uri.'&u='.$_GET['u'];
    $_SESSION['uri'] = $uri;
}

if($_GET['order_id'])
{
    $uri = $uri.'&order_id='.$_GET['order_id'];
    $_SESSION['uri'] = $uri;
}
else
{
    $_SESSION['uri'] = $uri;
}


$appid = $db->getOne("SELECT appid FROM `wxch_config` WHERE `id` = 1");

$cfg_baseurl = $db->getOne("SELECT cfg_value FROM wxch_cfg WHERE cfg_name = 'baseurl'");
$gouri = urlencode($_SESSION['uri']);
$back_url = $cfg_baseurl.'wechat/oauth/wxch_location.php?uri='.$gouri;
$redirect_uri = urlencode($back_url);

$state = 'wechat';
$scope = 'snsapi_base'; //snsapi_base    snsapi_userinfo

$oauth_url = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid='.$appid.'&redirect_uri='.$redirect_uri.'&response_type=code&scope='.$scope.'&state='.$state.'#wechat_redirect';


header('Expires: 0');
header('Last-Modified: '. gmdate('D, d M Y H:i:s') . ' GMT');
header('Cache-Control: no-store, no-cahe, must-revalidate');
//ie专用
header('Cache-Control: post-chedk=0, pre-check=0', false);
//for HTTP/1.0
header('Pragma: no-cache');
header("HTTP/1.1 301 Moved Permanently");
header("Location: $oauth_url");
exit;