<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'header.php'; print_header('Demo - BigVid Lab'); ?>
	<link href="css/video-js.css" rel="stylesheet">
	<script src="js/video.js"></script>
</head>
<body>
	<?php include 'navbar.php'; print_navbar(5); ?>
	<div class="container">
		<h4>Organizing Video Search Results to Adapted Semantic Hierarchies [related paper]</h4>
		<video id="video1" class="video-js vjs-default-skin" controls
		preload="auto" width="640" height="264" poster="poster.jpg"
		data-setup="{}">
		<source src="ocean.mp4" type='video/mp4'>
		<source src="ocean.webm" type='video/webm'>
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
		</video>
		<hr>
		<h4>Real-time Summarization of User-Generated Videos [related paper]</h4>
		<video id="video2" class="video-js vjs-default-skin" controls
		preload="auto" width="640" height="264" poster="MY_VIDEO_POSTER.jpg"
		data-setup="{}">
		<source src="MY_VIDEO.mp4" type='video/mp4'>
		<source src="MY_VIDEO.webm" type='video/webm'>
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
		</video>
		<hr>
		<h4>Fast Video Event Recognition and Its Application to Video Search [related paper]</h4>
		<video id="video3" class="video-js vjs-default-skin" controls
		preload="auto" width="640" height="264" poster="MY_VIDEO_POSTER.jpg"
		data-setup="{}">
		<source src="MY_VIDEO.mp4" type='video/mp4'>
		<source src="MY_VIDEO.webm" type='video/webm'>
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
		</video>
		<hr>
		<h4>Textually Describing Complex Video Contents [related paper]</h4>
		<video id="video4" class="video-js vjs-default-skin" controls
		preload="auto" width="640" height="264" poster="MY_VIDEO_POSTER.jpg"
		data-setup="{}">
		<source src="MY_VIDEO.mp4" type='video/mp4'>
		<source src="MY_VIDEO.webm" type='video/webm'>
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
		</video>
		<hr>
	</div>
	<?php include 'footer.php' ?>
</body>
</html>

