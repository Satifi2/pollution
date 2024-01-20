<!--
   Team: NKUSaveSea
   Coding by 张丽婷 2111190, 2023/12/17
   轮播图
 -->
<!-- 轮播图有几张图是由下面li的个数决定 -->
<div class="lunbo">
   <div class="lb-content">
   <ul id="lb-item">
   <li class="lb-item">
    <a href="#"><img class="lb-img" src=<?= $data[0]['Slink']?> >
    <div>
        <div class="header">
            <span class="name"><?=$data[0]['Sname']?></span>
            <span class="country"><?=$data[0]['Selement']?></span> <!--原是国家我先测试sname -->
        </div>
    </a>
        <div class="description"><?=$data[0]['Sintro']?></div>
    </div>    
    </li>
    <li class="lb-item">
    <a href="#"><img class="lb-img" src=<?= $data[1]['Slink']?> >
    <div>
        <div class="header">
            <span class="name"><?=$data[1]['Sname']?></span>
            <span class="country"><?=$data[1]['Selement']?></span>
        </div>
    </a>
        <div class="description"><?=$data[1]['Sintro']?></div>
    </div>
    </li>
    <li class="lb-item">
    <a href="#"><img class="lb-img" src=<?= $data[2]['Slink']?> >
    <div>
        <div class="header">
            <span class="name"><?=$data[2]['Sname']?></span>
            <span class="country"><?=$data[2]['Selement']?></span>
        </div>
    </a>
        <div class="description"><?=$data[2]['Sintro']?></div>
    </div>    
    </li>
    <li class="lb-item">
    <a href="#"><img class="lb-img" src=<?= $data[3]['Slink']?> >
    <div>
        <div class="header">
            <span class="name"><?=$data[3]['Sname']?></span>
            <span class="country"><?=$data[3]['Selement']?></span>
        </div>
    </a>
        <div class="description"><?=$data[3]['Sintro']?></div>
    </div>    
    </li>
    <li class="lb-item">
    <a href="#"><img class="lb-img" src=<?= $data[4]['Slink']?> >
    <div>
        <div class="header">
            <span class="name"><?=$data[4]['Sname']?></span>
            <span class="country"><?=$data[4]['Selement']?></span>
        </div>
    </a>
        <div class="description"><?=$data[4]['Sintro']?></div>
    </div>    
    </li>
    <li class="lb-item">
    <a href="#"><img class="lb-img" src=<?= $data[5]['Slink']?> >
    <div>
        <div class="header">
            <span class="name"><?=$data[5]['Sname']?></span>
            <span class="country"><?=$data[5]['Selement']?></span>
        </div>
    </a>
        <div class="description"><?=$data[5]['Sintro']?></div>
    </div>    
    </li>
    <li class="lb-item">
    <a href="#"><img class="lb-img" src=<?= $data[6]['Slink']?> >
    <div>
        <div class="header">
            <span class="name"><?=$data[6]['Sname']?></span>
            <span class="country"><?=$data[6]['Selement']?></span>
        </div>
    </a>
        <div class="description"><?=$data[6]['Sintro']?></div>
    </div>    
    </li>
    <li class="lb-item">
    <a href="#"><img class="lb-img" src=<?= $data[7]['Slink']?> >
    <div>
        <div class="header">
            <span class="name"><?=$data[7]['Sname']?></span>
            <span class="country"><?=$data[7]['Selement']?></span>
        </div>
    </a>
        <div class="description"><?=$data[7]['Sintro']?></div>
    </div>    
    </li>
   </ul>
   <div id="btn-left"><</div>
   <div id="btn-right">></div>
   <ul id="circle">
     
    <li class="circle"></li>
    <li class="circle"></li>
    <li class="circle"></li>
    <li class="circle"></li>
    <li class="circle"></li>
    <li class="circle"></li>
    <li class="circle"></li>
    <li class="circle"></li>
   </ul>
   </div>
</div>
