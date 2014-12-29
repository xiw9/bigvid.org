<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'header.php'; print_header('Demo - BigVid Lab'); ?>
	<link href="css/video-js.css" rel="stylesheet">
	<script src="js/video.js"></script>
	<script>
	  videojs.options.flash.swf = "http://bigvid.org/css/video-js.swf"
	</script>
</head>
<body>
	<?php include 'navbar.php'; print_navbar(5); ?>
	<div class="container">
		<p>Organizing Video Search Results to Adapted Semantic Hierarchies</p>
		<p>[related paper]</p>
		<video id="video1" class="video-js vjs-default-skin" controls
		preload="none" width="640" height="360" poster="poster.jpg"
		data-setup="{}">
		<source src="ocean.mp4" type='video/mp4'>
		<source src="ocean.webm" type='video/webm'>
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
		</video>
		<hr>
		<p>Real-time Summarization of User-Generated Videos</p>
		<p>[<a href="http://bigvid.xiw.im/publication/mm14-videosearch.pdf">related paper</a>]</p>
		<video id="video2" class="video-js vjs-default-skin" controls
		preload="none" width="640" height="360" poster="poster.jpg"
		data-setup="{}">
		<source src="ocean.mp4" type='video/mp4'>
		<source src="ocean.webm" type='video/webm'>
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
		</video>
		<hr>
		<p>Fast Video Event Recognition and Its Application to Video Search</p>
		<p>[related paper]</p>
		<video id="video3" class="video-js vjs-default-skin" controls
		preload="none" width="640" height="360" poster="poster.jpg"
		data-setup="{}">
		<source src="ocean.mp4" type='video/mp4'>
		<source src="ocean.webm" type='video/webm'>
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
		</video>
		<hr>
		<p>Textually Describing Complex Video Contents</p>
		<p>[related paper]</p>
		<video id="video4" class="video-js vjs-default-skin" controls
		preload="none" width="640" height="360" poster="poster.jpg"
		data-setup="{}">
		<source src="ocean.mp4" type='video/mp4'>
		<source src="ocean.webm" type='video/webm'>
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
		</video>
		<hr>
	</div>
	<?php include 'footer.php' ?>
</body>
</html>

