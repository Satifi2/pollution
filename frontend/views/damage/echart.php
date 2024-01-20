<?php
/**
 * Team: NKUSaveSea
 * Coding by 叶潇晗 2112120, 20231220
 * 获取查询json数据
 */
header("Content-type=text/json;charset=UTF-8");
$result = Yii::$app->db->createCommand('SELECT * FROM damage')
            ->queryAll();
$data="";
$array= array();
class Damage{
    public $date;
    public $tank;
    public $tankAll;
    public $UAV;
    public $UAVAll;
    public $car;
    public $carAll;
}

foreach($result as $row){
    $damage=new Damage();
    $damage->date = $row['ddate'];
    $damage->tank = $row['dtank'];
    $damage->tankAll=$row['dtankAll'];
    $damage->UAV=$row['dUAV'];
    $damage->UAVAll=$row['dUAVAll'];
    $damage->car=$row['dcar'];
    $damage->carAll=$row['dcarAll'];
    $array[]=$damage;
}

$data=json_encode($array);
exit($data);
?>