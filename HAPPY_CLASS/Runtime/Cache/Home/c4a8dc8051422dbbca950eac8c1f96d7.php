<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>快乐班级</title>

    <link rel="stylesheet" type="text/css" href="/happy_class/Public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/happy_class/Public/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="/happy_class/Public/css/index.css">
</head>
<body>
<div id="bg">
    <div class="banner">
        <div class="list"></div>
        <div class="charts">
            <span class="char">charts</span>
            <span class="rank">排行榜</span>
        </div>
    </div>
    <div class="vote">
        <div class="xy">
            <img src="/happy_class/Public/image/vote.jpg" alt="">
            <div class="voted_classes">
                <div class="voted_class">15软件2班</div>
                <!-- <div class="voted_class">15软件2班</div>
                <div class="voted_class">15软件2班</div>
                <div class="voted_class">15软件2班</div>
                <div class="voted_class">15软件2班</div>
                <div class="voted_class">15软件2班</div>
                <div class="voted_class">15软件2班</div>
                <div class="voted_class">15软件2班</div>
                <div class="voted_class">15软件2班</div>
                <div class="voted_class">15软件2班</div> -->
            </div>
        </div>
        <div class="offer">*投票数据由星空学生创新中心统计</div>
    </div>
    <div class="vote">
        <div><span  class="votespan">vote</span>
            <span class="voteclass">班级投票</span></div>
        <div id="classes">
            <div class="container">
                <div class="progress progress-striped active" id="load_bar">
                    <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0"
                         aria-valuemax="100"
                         style="width: 100%">
                        <span class="sr-only">100% Complete</span>
                    </div>
                </div>
            </div>
            <!--<div id="class1" class="class">
                <div class="pic">
                    <img  id="cover1" src="/happy_class/Public/image/pic.png" style="width:100%;height:100%;margin:0 auto;">
                </div>
                <div class="num"><span id="id2">14通信1班</span></div>
            </div>
            <div id="class2" class="class">
            </div>
            <div id="class3" class="class">
            </div>
            <div id="class4" class="class">
            </div>
            <div id="class5" class="class">
            </div>
            <div id="class6" class="class">
            </div>
            <div id="class7" class="class">
            </div>
            <div id="class8" class="class">
            </div>
            <div id="class9" class="class">
            </div>
            <div id="class10" class="class">
            </div>
        </div>-->
        </div>
        <div id="hide"></div>
        <div class="rule">
            <p>1.一个ip限投一次票</p>
            <p>1.一个ip限投一次票</p>
            <p>1.一个ip限投一次票</p>
            <p>1.一个ip限投一次票</p>
            <p>1.一个ip限投一次票</p>
            <p>1.一个ip限投一次票</p>
        </div>
        <div class="section"></div>
        <div class="footer">
            Copyright&copy2006-2016星空学生创新中心</br>
            www.xingkong.us
        </div>
    </div>
</body>
<script type="text/javascript">
    var getClassUrl = "<?php echo U('Home/Index/getClass');?>";	//获取班级信息url
</script>
<script type="text/javascript" src="/happy_class/Public/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/happy_class/Public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/happy_class/Public/js/index.js"></script>
</html>