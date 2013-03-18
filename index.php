<?php
# Copyright © 2013 Martin Ueding <dev@martin-ueding.de>

require_once('Notes.php');

$notes = new Notes();

if (isset($_POST['text'])) {
	$notes->addNote($_POST['text']);
}

?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Notes</title>
		<style type="text/css">
			input {
				font-size: 20px;
			}
		</style>
	</head>
	<body>
		<form action="index.php" method="post">
			<input type="text" name="text" />
			<input type="submit" />
		</form>

		<ul>
		<?php
		foreach ($notes->data as $note) {
			echo '<li>'.($note['text']).'</li>';
		}
		?>
		</ul>
	</body>
</html>
