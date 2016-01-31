<?php
$prize_arr = array(
	'0' => array('pid'=>1,'prize'=>'平板电脑','v'=>5),
	'1' => array('pid'=>2,'prize'=>'数码相机','v'=>15),
	'2' => array('pid'=>3,'prize'=>'音箱设备','v'=>30),
	'3' => array('pid'=>4,'prize'=>'4G优盘','v'=>50),
	'4' => array('pid'=>5,'prize'=>'Q币10元','v'=>100),
	'5' => array('pid'=>6,'prize'=>'下次没准就能中哦','v'=>100),
);


foreach ($prize_arr as $key => $val) {
	$arr[$val['pid']] = $val['v'];
}
//print_r($arr);

$rid = getRand($arr); //根据概率获取奖项id
$res['msg'] = ($rid==6)?0:1;
$res['pid'] = $prize_arr[$rid-1]['pid'];    //id
$res['prize'] = $prize_arr[$rid-1]['prize']; //中奖内容
echo json_encode($res);exit;


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
?>