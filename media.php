<?php include("includes/config.php");?>

<?php
/*
 * suppose your file is http://www.songsite.com/xyz.mp3
 */
  // $audio_path = 'http://www.songsite.com/xyz.mp3';
$video ='ialert/video_uploads/x.mp4';

  $type_name = 'song';
  $field_name = 'video'; 

  $jplayer_settings = array(
    'autoplay' => 0,
    'solution' => 'html, flash',
    'preload' => 'metadata',
    'volume' => 80,
    'muted' => FALSE,
    'repeat' => 'none',
    'backgroundColor' => '000000',
    'mode' => 'single',
  ); 
  $file_name = explode("/", $video);

  $video_name = $file_name[count($file_name) -1];

  $jplayer_items[0] = array(
    'filename' => $video_name,
    'uri' => $video,
  );
  $jplayer_data = array(
    'field_name' => $field_name,
    'type_name' => $type_name,
    'items' => $jplayer_items,
    'theme' => 'jplayer_single',
    'settings' => $jplayer_settings,
  );
  echo' theme('jplayer', $jplayer_data)';


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jwplayer/jwplayer.js"></script>
</head>
<body>

<div id="myElement">Loading the player...</div>

<script type="text/javascript">
    jwplayer("myElement").setup({
        file: "/uploads/myVideo.mp4",
        image: "/uploads/myPoster.jpg"
    });
</script>
</body>
</html>