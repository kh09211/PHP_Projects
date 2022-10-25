<?php

/**
 * A simple app to play audio files with javacript
 */
$filenames = array_values(array_diff(scandir('audios_spanish'), array('..', '.')));

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>English Lessons</title>
</head>

<script>
	var lessons = <?php echo json_encode($filenames) ?>;

	function changeAudio(filename) {
		var el = document.getElementById('audio');
		el.src = 'audios_spanish/' + filename;
		el.play();
	}
</script>

<body style="background-color:azure">
	<div style="display: flex; flex-direction: row; justify-content: center; padding: 20px;">
		<div id="player">
			<audio controls id="audio">
				<source id="source" src="audios/<?php echo $filenames[0] ?>" type="audio/mpeg">
				Your browser does not support the audio element.
			</audio>
		</div>
	</div>
	<div style="display: flex; flex-direction: row; justify-content: center;  flex-wrap: wrap;">
		<button style="width: 175px; margin: 3px;" onClick="changeAudio('userguide.mp3')">
			<?php $name = explode(' ', str_replace('.mp3', '', $lesson));
			echo 'User Guide'; ?>
		</button>
		<?php foreach ($filenames as $lesson) { 
			if ($lesson == 'userguide.mp3') continue;?>
			<button style="width: 175px; margin: 3px;" onClick="changeAudio('<?php echo $lesson ?>')">
				<?php $name = explode(' ', str_replace('.mp3', '', $lesson));
				echo 'Spanish ' . $name[1] . ' - Lesson - ' . $name[4]; ?>
			</button>
		<?php } ?>
	</div>
</body>

</html>