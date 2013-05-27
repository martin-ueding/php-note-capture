<?php
# Copyright © 2013 Martin Ueding <dev@martin-ueding.de>

require_once('Notes.php');

$notes = new Notes();

if (isset($_POST['text'])) {
	$notes->addNote($_POST['text'], $_POST['priority']);
}

?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
		<title>Notes</title>
		<style type="text/css">
			input {
				font-size: 20px;
			}
		</style>
	</head>
	<body onload="javascript:document.mainform.text.focus()">
		<form action="index.php" method="post" name="mainform">
			<input type="text" name="text" autocomplete="off" />
			<select name="priority" size="1">
				<option value=""></option>
				<option value="h">high</option>
				<option value="m">medium</option>
				<option value="l">low</option>
			</select>
			<input type="submit" />
		</form>

		<ul>
		<?php
		foreach ($notes->data as $note) {
			echo '<li>'.htmlspecialchars($note['text']).' ('.$note['priority'].')</li>';
		}
		?>
		</ul>
	</body>
</html>
