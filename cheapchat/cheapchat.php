<?php
/* cheapchat.php
 * main page for the cheapchat 1.0 project. Using boostrap 4 cdn for styles
 */
include 'lib/header.php';
// If the user posted data, Process it then submit it to the database
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$submited_data = array (
		'name' => $_POST['name'],
		'comment' => $_POST['comment']
		);
	// cut the string down to the length I want before inserting to database
	$submited_data['comment'] = cut_string($submited_data['comment'], 75);
	$submited_data['name'] = cut_string($submited_data['name'], 14);
	put_comment($submited_data);
	// Redirect so the page cant be refreshed to submit the data
	header ('Location: cheapchat.php');
}
?>
<div class="container">
	<div class="row">
		<div class="col-md" id="chatbox-row">
			<div class="chatbox border border-danger rounded-top" id="chatbox">
				<p class="text-truncate"><?php
					//THIS CODE LOOPS COMMENTS FROM THE DATABASE INTO THE CHATBOX
					$comments = get_comment();
					foreach ($comments as $comment) {
						echo $comment['name'] . " :   ";
						echo $comment['comment'] . "<br>";
					}
				?>
				</p>
			</div>
		</div>
	</div>
		<form action="cheapchat.php" method="POST">
			<div class="row no-gutters " id="typebox-row">
				<div class="col-md-2">
					
					<input type="text" id="name" name="name" placeholder="Your name" class="rounded-bottom" required>
					
				</div>
				<div class="col-md-8">
					
					<input type="text" id="comment" name="comment" placeholder="Type something here!" required>
					
				</div>
				<div class="col-md-2">
					<button type="submit" id="submit-button" class="btn btn-outline-danger rounded-bottom">Submit</button>
				</div>
			</div>
		</form>
</div>
	<!-- Jquery 3 cdn -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
	// setInterval method to refresh
	$(document).ready(function() {
		//auto reload div after 3 seconds
		setInterval('refresh_div()', 3000);
	});

	function refresh_div() {
		// reload just the chatbox div with jquery .load ajax
		$('#chatbox').load(document.URL +  ' #chatbox');
	}
</script>

<?php 
include 'lib/footer.php';