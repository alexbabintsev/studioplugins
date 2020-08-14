<section id="view-demo" class="creative">
<div class="creative__volume">
<img src="/wp-content/themes/artuplugins/img/speaker.svg" alt="speaker">
</div>
<?php $video_url= get_field('video_url');
if(!$video_url)
	$video_url='/wp-content/themes/artuplugins/video/demo.mp4';
?>
<video loop="" playsinline="" muted="" data-keepplaying="" class="fullscreen-video" data-ratio="1.7777777777778" id="video-81641-1_html5" width="640" height="360" preload="metadata" src="<?= $video_url?>">
   <source type="video/mp4" src="<?= $video_url?>">
</video>
</section>