<?php

define('IN_ECS', true);
if(isset($_GET['todo']))
{
    $todo = $_GET['todo'];
}

//$do = array('souho.net','souho.cc');
//$do99 = $_SERVER['SERVER_NAME'];
//if(!in_array($do99,$do)){
//    $todo = 'error';
//}

require(dirname(__FILE__) . '/../includes/init.php');
require ('callback-ent.php');


$wechatObj = new wechatCallbackapi();
$base_url = 'http://'.$_SERVER['SERVER_NAME'].'/';
$db->prefix = $ecs->prefix;
$wechatObj->valid($db);
if($todo == 'create')
{
    $wechatObj->create_menu($db);
    exit;
}
elseif($todo == 'delete')
{
    $wechatObj->delete_menu($db);
    exit;
}

$wechatObj->responseMsg($db,$user,$base_url);
