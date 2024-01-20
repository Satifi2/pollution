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

<?= $content ?>


<!--==============================footer=================================-->


<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>