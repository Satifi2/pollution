<?php
/**
 * Team: NKUsavesea
 * Coding by 杜金轩 2111288, 20231222
 * 成员页
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;


$this->title = 'TeamMem';
$this->params['breadcrumbs'][] = $this->title;
?>  

    <link href="css/newstyle.css" rel="stylesheet">
	<script src="js-new/jquery.appear.js"></script>
	<script src="js-new/bootstrap.js"></script>
	<script src="js-new/jquery.sidr.min.js"></script>
	<script src="js-new/script.js"></script>

    <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<style>
	a:link {color:#55ffff;}      /* 未访问链接*/
	a:visited {color:#000000;}  /* 已访问链接 */
	a:hover {color:#FF00FF;}  /* 鼠标移动到链接上 */
	a:active {color:#0000FF;}  /* 鼠标点击时 */
	.a{text-align:center;font-size:50pt;}
	img.normal{display: block;width: 50%; margin: 0 auto;height:auto;}
	img.big{display: block;width: 100%; margin: 0 auto;height:100px;}
	</style>
	<body>
		<head>
			<meta charset="utf-8">
			<title></title>
			<link rel="stylesheet"  href="style.css">
		</head>
		<div class="card">
		    <div class="photo">
		        <img src="images/bj.jpg">
		    </div>
		
		    <h1>NKUsavesea</h1>
            <p></p>
            <p></p>
		    <h2>团队格言：We are family!</h2>
			<a href="/yii2/frontend/web/index.php?r=members/mem">成员介绍</a>
			<a href="/yii2/frontend/web/index.php">回到主页</a>
            <p></p>
            <p></p>
     </div>
	</body>
</html>


