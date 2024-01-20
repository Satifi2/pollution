<?php
/**
 * Team: NKUSaveSea
 * Coding by 叶潇晗 2112120, 20231223
 * 获取JSON数据
 */
header('Content-Type:application/json; charset=utf-8');

$result = Yii::$app->db->createCommand('SELECT * FROM victim')
            ->queryAll();
$data="";
$array= array();
class Victim{
    public $date;
    public $rcount;
    public $ucount;
}

foreach($result as $row){
    $victim=new Victim();
    $victim->date = $row['vdate'];
    $victim->rcount = $row['vrcount'];
    $victim->ucount = $row['vucount'];
    $array[]=$victim;
}

$data=json_encode($array);
exit($data);
?>