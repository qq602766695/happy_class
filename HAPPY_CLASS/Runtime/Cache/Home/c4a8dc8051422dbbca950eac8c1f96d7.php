<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>快乐班级</title>
	<script type="text/javascript" src="/happy_class/Public/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="/happy_class/Public/js/index.js"></script>
	<link rel="stylesheet" type="text/css" href="/happy_class/Public/css/index.css">
	<script type="text/javascript" src="/happy_class/Public/js/video.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/happy_class/Public/css/video-js.min.css">
</head>
<body>
	<div id="header">
	<!-- 轮播图 -->
	 	<div class="banner_bg">
			<div id="banner">
	 			<a  class="img img1" target="_blank"></a>
				<a  class="img img2" href="http://www.xingkong.us" target="_blank"></a>
				<a  class="img img3" target="_blank"></a>
			</div>
			<div id="arrow">
				<span class="arrow_left" id="prev" ></span>
				<span class="arrow_right" id="next" ></span>
			</div>
	 	</div>
 	</div>
 <!-- 介绍 -->
 	<div id="preface">
 		<h1>快乐班级比赛简介</h1>
 	</div>
<!-- 班级 -->
<div id="classes">
	<div id="class1" class="class">
		<div class="pic"><img src="/happy_class/Public/image/pic.png" class="classimg"></div>
		<div class="num"><span id="id"></span></div>
	</div>
	<div id="class2" class="class">
		<div class="pic"></div>
		<div class="num"></div>
	</div>
	<div id="class3" class="class">
		<div class="pic"></div>
		<div class="num"></div>
	</div>
	<div id="class4" class="class">
		<div class="pic"></div>
		<div class="num"></div>
	</div>
</div>
<!-- 点击时出现的层 -->

<div id="hide">
	<div class="nav">
		<div class="close"></div>
	</div>
	<video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" poster="/happy_class/Public/image/banner_1.png" data-setup="{}">
	    <source src="video/1.mp4" type='video/mp4' />
	    <track kind="subtitles" src="demo.captions.vtt" srclang="en" label="English"><!-- 该轨道定义字幕，用于在视频中显示字幕。 -->
    </video> 
</div>
<!-- 底部 -->
<div id="footer">
<!-- 开发人员 -->
	<!-- <div id="developers">
		<div class="developer">
			<div class="people"></div>
		</div>
	</div> -->
</div>
<script type="text/javascript">
	var img=$('.banner_bg a');
    var index=0;//索引
    videojs.options.flash.swf = "video-js.swf";
</script>
</body>
</html>