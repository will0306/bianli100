<?php

/**
 * wxch_check.php  UTF8
 * @author djks
 * @date 2014-03-14
 * @copyright http://www.weixincaihong.com
 */

define('IN_ECS', true);
require(dirname(__FILE__) . '/../../includes/init.php');

$wxid = !empty($_GET['wxid']) ? $_GET['wxid'] : '';

if(empty($wxid))
{
    $wxid = $_SESSION['wxid'];
}

//未关注检测
$wxch_user = $db->getRow("SELECT wxid,subscribe FROM `wxch_user` WHERE `wxid` = '$wxid' ");
$wxch_wxid = $wxch_user['wxid'];
if(empty($wxch_wxid))
{
    $subscribe = 0;
}
else
{
    $subscribe = $wxch_user['subscribe'];
}



if (strpos($_SERVER["HTTP_USER_AGENT"], "MicroMessenger"))
{
    $_SESSION['wxid'] = $wxid;
    $pid  = $_GET['pid'];
    if(empty($pid))
    {
        exit('请从微信进入');
    }
}
else
{
    exit('请从微信进入');
}



//loop
$loop = $db->getRow("SELECT * FROM `wxch_prize` WHERE `pid` = '$pid' ");

$mp_follow = $loop['mp_follow'];
$mp_msg = $loop['mp_msg'];
$mp_url = $loop['mp_url'];

if($loop['loop'] >=1)
{
    $lasttime = $db->getOne("SELECT `lasttime` FROM `wxch_prize_count` WHERE `wxid` = '$wxid' AND `pid` = '$pid'");
    $uptime = $lasttime+60*60*24*$loop['loop'];

    if(time()>=$uptime)
    {
        $cid = $db->getOne("SELECT `cid` FROM `wxch_prize_count` WHERE `wxid` = '$wxid' AND `pid` = '$pid';");
        $db->query("UPDATE `wxch_prize_count` SET `count` = '0' WHERE `cid` = '$cid';");
    }

}
//检测
$egg_times = $db->getRow("SELECT * FROM `wxch_prize` WHERE `pid` = '$pid'");


$status = $egg_times['status'];

if($status == 0)
{
    exit('活动尚未开始');
}


$time = time();
//echo date("Y-m-d",$egg_times['starttime']);
//echo date("Y-m-d",$time);
//echo $time - $egg_times['starttime'];
//exit;
if($time <= $egg_times['starttime'])
{
    exit('活动尚未开始');
}
elseif($time >= $egg_times['endtime'])
{
    exit('活动已结束');
}

//活动规则
$wxch_lang['prize_egg'] = $db->getOne("SELECT `lang_value` FROM `wxch_lang` WHERE `lang_name` = 'prize_egg'");


//加入抽奖数量记录
$prize['num'] = $db->getOne("SELECT `num` FROM `wxch_prize` WHERE `pid` = '$pid' ");
//检测抽奖次数
$query_sql = "SELECT `count` FROM `wxch_prize_count` WHERE `wxid` = '$wxid' AND `pid` = '$pid'";
//echo $query_sql;exit;
$prize_count = $db->getOne($query_sql);

if(( $prize_count >= $prize['num']))
{
    $prize['num'] = 0;
}
else
{
    $prize['num'] = $prize['num'] - $prize_count;
}


$prize['pzfun'] = $db->getOne("SELECT `fun` FROM `wxch_prize` WHERE `pid` = '$pid' ");
$prize['nickname'] = $db->getOne("SELECT `nickname` FROM `wxch_user` WHERE `wxid` = '$wxid' ");

$base_url = $db->getOne("SELECT `cfg_value` FROM `wxch_cfg` WHERE `cfg_name` = 'baseurl' ");

$m_url = $db->getOne("SELECT `cfg_value` FROM `wxch_cfg` WHERE `cfg_name` = 'murl' ");
$go_contact = $base_url . $m_url . 'wxch_contact.php'.'?wxid='.$wxid;
if(empty($m_url))
{
    $base_url = get_baseurl($db);
}



//prize 中奖记录
$prize_sql = "SELECT * FROM `wxch_prize_users` WHERE `yn` = 'yes' AND `prize_id` = '$pid' ORDER BY `dateline` DESC LIMIT 0,6";
$prize_users = $db->getAll($prize_sql);


//prize 奖品 数量

$sql = "SELECT * FROM `wxch_prize_append` WHERE `prize_id` = $pid";
$ret = $db->getAll($sql);
$i = 1;


foreach ($ret as $k => $v) {

    $wxchdata[$k] = $v;
    switch ($i) {
        case 1:
            $wxchdata[$k]['level'] = '一等奖';
            break;
        case 2:
            $wxchdata[$k]['level'] = '二等奖';
            break;
        case 3:
            $wxchdata[$k]['level'] = '三等奖';
            break;
        case 4:
            $wxchdata[$k]['level'] = '四等奖';
            break;
        case 5:
            $wxchdata[$k]['level'] = '五等奖';
            break;
        case 6:
            $wxchdata[$k]['level'] = '六等奖';
            break;
    }
    $i++;

    if (empty($wxchdata[$k]['prize_value'])) {
        unset($wxchdata[$k]);
    }

}
$temp_count = count($wxchdata) -1;
foreach($wxchdata as $k => $v)
{
    if ($temp_count == $k)
    {
        $wxchdata[$k]['state'] = 'no';
    }
    else
    {
        $wxchdata[$k]['state'] = 'yes';
    }
}


function get_baseurl($db)
{
    $murl = $db->getOne("SELECT `cfg_value` FROM `wxch_cfg` WHERE `cfg_name` = 'murl'");
    $base_ret = $db->getOne("SELECT `cfg_value` FROM `wxch_cfg` WHERE `cfg_name` = 'baseurl'");
    if(empty($murl))
    {
        $temp_img_arr = explode('.',$base_ret);
        $temp_do = array('http://m','http://mobile');
        if(in_array($temp_img_arr[0],$temp_do))
        {

            $baseurl = 'http://www.'.$temp_img_arr[1].'.'.$temp_img_arr[2];
        }
        return $baseurl;
    }
}

