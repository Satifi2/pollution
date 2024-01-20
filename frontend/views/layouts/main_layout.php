<!DOCTYPE html>
<html lang="en">
	 <head>
	 <title>NKUsavesea</title>
	 <meta charset="utf-8">
	 <link rel="icon" href="images/favicon.ico">
	 <link rel="shortcut icon" href="images/favicon.ico" />
	 <link rel="stylesheet" href="css/style.css?v=<%= System.currentTimeMillis()%>">
	 <link rel="stylesheet" href="css/slider.css?v=<%= System.currentTimeMillis()%>">
	 <link rel="stylesheet" href="css/grid.css?v=<%= System.currentTimeMillis()%>"><!--题头-->
	 <link rel="stylesheet" href="css/lunbo.css?v=<%= System.currentTimeMillis()%>">
	 <link rel="stylesheet" href="css/news.css?v=<%= System.currentTimeMillis()%>">
	 <link rel="stylesheet" href="css/news-update.css">
	 <link rel="stylesheet" href="css/comment.css">
	 <link rel="stylesheet" href="css/home.css?v=<%= System.currentTimeMillis()%>">
	 <link rel="stylesheet" href="css/victim.css">
	 <link rel="stylesheet" href="css/manage.css">
	 <link rel="stylesheet" href="css/register.css">
	 <link rel="stylesheet" href="css/damage.css">
	 <link rel="stylesheet" href="css/signup_login.css">
	 
	 <script src="js/jquery.js"></script>
	 <script src="js/jquery-migrate-1.1.1.js"></script>
	 <!--菜单-->
	 <script src="js/superfish.js"></script>
	 <script src="js/jquery.equalheights.js"></script>
	 <script src="js/jquery.easing.1.3.js"></script>
	 <script src="js/tms-0.4.1.js"></script>
	 <script>
	  $(window).load(function(){
	  $('.slider')._TMS({
			  show:0,
			  pauseOnHover:false,
			  prevBu:'.prev',
			  nextBu:'.next',
			  playBu:false,
			  duration:800,
			  preset:'fade', 
			  pagination:true,//'.pagination',true,'<ul></ul>'
			  pagNums:false,
			  slideshow:8000,
			  numStatus:false,
			  banners:true,
		  waitBannerAnimation:false,
		progressBar:false
	  })  
	  });
	 </script>
	<!--[if lt IE 9]>
	  <script src="js/html5shiv.js"></script>
	  <link rel="stylesheet" media="screen" href="css/ie.css">

	<![endif]-->
	 </head>
	 <body>
<!--==============================header=================================-->
 <header> 
  <div class="container_12">
	<div class="grid_12"> 
		<div class="logo">
	<a href="index.php"><img src="images/NKU-SaveSea.png" alt="日本核废水  made by NKUSaveSea"></a></div><div class="clear"></div>
	
		 <div class="menu_block">
		   <nav class="" >
			<ul class="sf-menu">
	  				<!--[if lt IE 9]>
	  				这里可能右路径不一样的问题
					<![endif]-->
					<li class=""><a href="/yii2/frontend/web/">首页</a></li>
				   	<li class="with_ul"><a href="/yii2/frontend/web/index.php?r=site/about">资料</a>
						<ul>
							<li><a href="/yii2/frontend/web/index.php?r=news/index">新闻</a></li>
							<li><a href="/yii2/frontend/web/index.php?r=manage/index">专家介绍</a></li>
							<li><a href="/yii2/frontend/web/index.php?r=damage/index">辐射数据</a></li>
							<li><a href="/yii2/frontend/web/index.php?r=victim/index">排放情况</a></li>
				   			<li><a href="/yii2/frontend/web/index.php?r=comment/index">评论</a></li>
							<li><a href="/yii2/frontend/web/index.php?r=members/index">小队</a></li>
					 	</ul>
					</li>

				   	<li><a href="/yii2/backend/web/">后台</a></li>
		<?php if(Yii::$app->user->isGuest){ ?>
                    <li><a href="/yii2/frontend/web/index.php?r=site/signup">注册</a></li>
              <?php } ?>
        <?php if(Yii::$app->user->isGuest){ ?>
                    <li><a href="/yii2/frontend/web/index.php?r=site/login">登录</a></li>
              <?php } ?>
        <?php if(!Yii::$app->user->isGuest){ ?>
                    <li><a href="/yii2/frontend/web/index.php?r=site/logout" data-method="post">LOGOUT</a></li>
              <?php } ?>
        </li>
				 </ul>
			  </nav>
		   <div class="clear"></div>
		   </div>
		   <div class="clear"></div>
	  </div>
	</div>
</header>
<?= $content ?>

<div class="bottom_block">
  <div class="container_12">
	<div class="grid_6">
	  	<h5>资料链接</h5>
	  	<ul>
			<?php
				// 获取资料网址并渲染
				use frontend\models\Links;
				use frontend\models\LinksForm;
				$model = new LinksForm();
				$Links = Links::find()->orderBy('Lid DESC')->asArray()->all();
				$i = 0;
				foreach ($Links as $Link){
					$i+=1;
					if($i>5)break;
					// 切片用单引号
					$url = "/yii2/frontend/web/index.php?r=news/links&name=".$Link['Lname'];
					echo '<li><a href="'.$url.'">'.$Link['Lname'].'</a></li>';
				}
			?>
		</ul>
	</div>
	<div class="grid_5">
	  <h4>contact Us</h4>
	  <p>我们是NKUsavesea团队，这是我们做的课程网页，相关信息可查看About，如果有疑问的地方，可以联系邮箱。</p>
	  <span>839162837@qq.com</span>
	</div>
  </div>
</div>
<!--==============================footer=================================-->

<footer>	
  <div class="container_12">
	<div class="grid_12">

	 <p>&copy; Copyright &copy; 2013.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
	 <address>
9870 ST VINCENT PLACE, GLASGOW, DC 45 FR 45.<br>
TELEPHONE: +1 800 603 6035</address>

	</div>
	<div class="clear"></div>
  </div>
</footer>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>