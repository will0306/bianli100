<?php

define('IN_ECS', true);
error_reporting(0);
require(dirname(__FILE__) . '/../includes/init.php');
$pid  = $_GET['pid'];

$sql = "SELECT * FROM `wxch_prize_append` WHERE `prize_id` = '$pid'";
$prize_arr = $db->getAll($sql);

foreach ($prize_arr as $key => $val) {
    if(empty($val['prize_value']))
    {
        unset($prize_arr[$key]);
    }
}
$temp_count = count($prize_arr) -1;

//奖品数量 统计 少了就没有了
foreach($prize_arr as $k => $v)
{
    $ck_cnum = $db->getOne("SELECT `pid` FROM `wxch_prize_cnum` WHERE `pid` = '$v[prize_id]' ");

    if ($temp_count == $k) {
        if (empty($ck_cnum)) {
            $insert_sql = "INSERT INTO `wxch_prize_cnum` (`paid`, `pid`, `prize_name`, `prize_value` , `user_count`) VALUES ('$v[id]', '$v[prize_id]', '$v[prize_name]', '$v[prize_value]' ,'1');";
        } else {


            $insert_sql = "UPDATE `wxch_prize_cnum` SET `user_count` = `user_count` +1 WHERE `wxch_prize_cnum`.`paid` ='$v[id]';";

        }
        $prize_arr[$k]['state'] = 'no';

    } else {
        $prize_arr[$k]['state'] = 'yes';
    }
    if ($insert_sql) {
        $db->query($insert_sql);
    }
    //奖品对比
    $ck_prize_num = $db->getOne("SELECT `user_count` FROM `wxch_prize_cnum` WHERE `paid` = '$v[id]'");

    if ($ck_prize_num >= $v['prize_value']) {
        //消除记录
        if($prize_arr[$k]['state'] == 'yes')
        {
            unset($prize_arr[$k]);
        }

    }

}
//print_r($prize_arr);exit;


//中奖机率
foreach ($prize_arr as $key => $val) {
    if(!empty($val['prize_value']))
    {
        $arr[$val['id']] = $val['prize_value'];
    }
}
$fun  = $_GET['pzfun'];
$rid = getRand($arr); //根据概率获取奖项id
$wxid = $_GET['wxid'];

//检测抽奖次数
$query_sql = "SELECT `num` FROM `wxch_prize_count` WHERE `wxid` = '$wxid' AND `pid` = '$pid'";
//echo $query_sql;exit;
$res['num'] = $db->getOne("SELECT `num` FROM `wxch_prize` WHERE `pid` = '$pid' ");
$prize_count = $db->getOne($query_sql);
//echo $prize_count.'--'.$res['num'];exit;
if(( $prize_count >= $res['num']))
{
    $res['msg'] = 2;
    $res['prize'] = '您抽奖的机会用完了';
    $res['num'] = 0;
    echo json_encode($res);exit;
}
else
{
    $res['msg'] = ($rid==6)?0:1;
    $res['pid'] = $prize_arr[$rid-1]['prize_id'];    //id
    $res['prize'] = $prize_arr[$rid-1]['prize_name']; //中奖内容
    if($prize_arr[$rid-1]['state'] == 'no')
    {
        $res['msg'] = 0;
    }
    else
    {
        $res['msg'] = 1;
    }
    if($res['num'] <= 0)
    {
        $res['num'] = 0;
    }
    else
    {
        $res['num'] = $res['num'] - $prize_count;
    }
    $res['pid'] = $pid;
    $res['pzfun'] = $fun;
    $res['yn'] = $prize_arr[$rid-1]['state'];
    $res['paid'] = $prize_arr[$rid-1]['id'];
    $res['prize_name'] = $res['prize'];
    $res['prize_value'] = $prize_arr[$rid-1]['prize_value'];
    //互动人数统计
    $db->query("UPDATE `wxch_prize` SET `count` = `count`+1 WHERE `wxch_prize`.`pid` = '$pid';");

    echo json_encode($res);exit;

}


//计算概率
function getRand($proArr) {
	$result = '';

	//概率数组的总概率精度
	$proSum = array_sum($proArr);

	//概率数组循环
	foreach ($proArr as $key => $proCur) {
		$randNum = mt_rand(1, $proSum);
		if ($randNum <= $proCur) {
			$result = $key;
			break;
		} else {
			$proSum -= $proCur;
		}
	}
	unset ($proArr);

	return $result;
}