<?php
/**
 * Team: NKUSaveSea
 * Coding by 张丽婷 2111190 2023/12/17
 * 新闻主页
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;

$this->title = '';
$this->params['breadcrumbs'][] = $this->title;
?>

<!--第n次尝试添加波纹不行，Ok-->
<style>
    /* 设置波纹容器的样式 */
    .ripple-container {
        width: 100%;
        height: 500px;
        /*background: #FF0000; 修改为红色背景 */
        background-image: url("../web/images/nnnn.jpg"); /* 设置图片 URL */
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }

    /* 设置波纹效果的样式 */
    #ripple {
        position: absolute;
        width: 50%;
        height: 50%;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.2);
        transform: scale(0);
        animation: ripple 1s linear infinite;
    }

    /* 定义波纹动画 */
    @keyframes ripple {
        to {
            transform: scale(2);
            opacity: 0;
        }
    }
</style>

<style>
/* 设置 sticky-container 元素的样式 */
.sticky-container {
    background: transparent; /* 设置背景为透明 */
    overflow: hidden; /* 隐藏溢出内容 */
    width: 80%; /* 设置宽度为80% */
    margin: auto; /* 水平居中对齐 */
}

/* 设置 blurfield 元素的样式 */
.blurfield {
    height: 200px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: transparent; /* 设置背景颜色为黑色 */
    filter: blur(10px) contrast(30); /* 设置模糊和对比度效果 */
}

/* 设置 ball1 和 ball2 类的样式 */
.ball1,
.ball2 {
    width: 100px;
    height: 100px;
    background-color: #bcafec; /* 设置背景颜色为深蓝色 */
    position: absolute;
    animation: ball 10s infinite; /* 设置动画效果，持续时间为10秒，无限循环 */
    border-radius: 100%; /* 设置圆形边框 */
}


/* 设置 ball2 类的动画延迟 */
.ball2 {
    animation-delay: -2s;
}

/* 设置 ball 动画的关键帧 */
@keyframes ball {
    0% {
        transform: translateX(-200px); /* 初始位置向左平移100px */
    }
    50% {
        transform: translateX(200px); /* 中间位置向右平移100px */
    }
    100% {
        transform: translateX(-200px); /* 结束位置向左平移100px */
    }
}
</style>

<!-- 标题：波纹容器 -->
<div class="ripple-container">
    <div id="ripple"></div>
    <div class="news-title" data-text="NEWS">NEWS</div>
</div>


<!-- 板块一：轮播图展示核污水有害物质 -->
<div class="news-detail-line">有害物质</div>
<script src="js/lunbo.js"></script>
<?php echo $this->render('lunbo',['data' => $data]);?>
<!--插件动画-->
<div class="sticky-container">
   <div class="blurfield">
     <div class="ball1"></div>
     <div class="ball2"></div>
   </div>
 </div>


<!-- 板块二：时事热点 -->

<div class="news-content">    
<link href="https://cdn.bootcdn.net/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<div class="news-detail-line">时事热点</div>

<div class="news-layout">
    <ul class="news-list module-1">
        <!--遍历新闻表中的记录并打印-->
        <?php foreach ($news as $new): ?>
            <li>
                <a class="news-item-title" data-text=" <?= Html::encode(" {$new->Ntitle}") ?>">
                    <?= Html::encode(" {$new->Ntitle}") ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
    <div class="news-loader">
        <!--光感圈的10条边-->
        <span style="--i:1;" class="loader-span"></span>
        <span style="--i:2;" class="loader-span"></span>
        <span style="--i:3;" class="loader-span"></span>
        <span style="--i:4;" class="loader-span"></span>
        <span style="--i:5;" class="loader-span"></span>
        <span style="--i:6;" class="loader-span"></span>
        <span style="--i:7;" class="loader-span"></span>
        <span style="--i:8;" class="loader-span"></span>
        <span style="--i:9;" class="loader-span"></span>
        <span style="--i:10;" class="loader-span"></span>
        <div class="news-subject">时  事<br>热  点</div>
    </div>
</div>


<!-- 板块三：背景回顾 -->
<div class="news-content">    
<link href="https://cdn.bootcdn.net/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<div class="news-detail-line">背景回顾</div> <!--画线-->
<!--搜索图标-->
<div class="search-box">
    <input class="search-txt" placeholder="搜索"/>
        <a class="search-btn">
            <i class="fa fa-search" aria-hidden="true" onclick="search()"></i>
        </a>
</div>
<div class="news-layout">
    <ul class="news-list module-2">
        <!--遍历新闻背景表中的记录-->
        <?php foreach ($background as $ground): ?>
            <li>
                <a class="news-item-title" data-text=" <?= Html::encode(" {$ground->Bname}") ?>">
                    <?= Html::encode(" {$ground->Bname}") ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
    <div class="news-loader">
        <span style="--i:1;" class="loader-span"></span>
        <span style="--i:2;" class="loader-span"></span>
        <span style="--i:3;" class="loader-span"></span>
        <span style="--i:4;" class="loader-span"></span>
        <span style="--i:5;" class="loader-span"></span>
        <span style="--i:6;" class="loader-span"></span>
        <span style="--i:7;" class="loader-span"></span>
        <span style="--i:8;" class="loader-span"></span>
        <span style="--i:9;" class="loader-span"></span>
        <span style="--i:10;" class="loader-span"></span>
        <div class="news-subject">背  景<br>回  顾</div>
    </div>
</div>



<script>
    // 为第一个模块的元素添加点击事件监听器
    const module1NewsItems = document.querySelectorAll('.module-1 .news-item-title');
    module1NewsItems.forEach((item) => {
        item.addEventListener('click', (event) => {
            // 第一个模块点击事件的处理逻辑
            let text = $(this).text();
            //alert("detail"); //先不跳转到新的页面，测试弹出一个提示框
            window.location.href="/yii2/frontend/web/index.php?r=news/detail&title=" + text;
        });
    });

    // 为第二个模块的元素添加点击事件监听器
    const module2NewsItems = document.querySelectorAll('.module-2 .news-item-title');
    module2NewsItems.forEach((item) => {
        item.addEventListener('click', (event) => {
            // 第二个模块点击事件的处理逻辑
            let text = $(this).text();
            //alert("detail"); //先不跳转到新的页面，测试弹出一个提示框
            window.location.href="/yii2/frontend/web/index.php?r=news/background&title=" + text;
        
        });
    });

    //为上面使用到的search函数添加定义
    function search(){
        let wd = $(".search-txt").val();
        window.open("https://www.baidu.com/s?wd="+wd);
    }
</script>


