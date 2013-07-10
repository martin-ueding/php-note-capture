<?php
# Copyright © 2013 Martin Ueding <dev@martin-ueding.de>

require_once('Notes.php');

$notes = new Notes();

if (isset($_POST['text'])) {
	$notes->addNote($_POST['text'], $_POST['priority']);
}

$hour = date("H");
if (20 <= $hour || $hour <= 7) {
	$cssfile = "night";
}
else {
	$cssfile = "day";
}

?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
		<title>Notes</title>
		<link rel="stylesheet" type="text/css" href="general.css" />
		<link rel="stylesheet" type="text/css" href="<?= $cssfile ?>.css" />
	</head>
	<body onload="javascript:document.mainform.text.focus()">
		<form action="" method="post" name="mainform">
			<input type="text" name="text" autocomplete="off" />
			<select name="priority" size="1">
				<option value=""></option>
				<option value="h">high</option>
				<option value="m">medium</option>
				<option value="l">low</option>
			</select>
			<input type="submit" />
		</form>

		<?php if (count($notes->data) > 0): ?>
		<table>
			<?php foreach ($notes->data as $note): ?>
			<tr>
				<td><?= htmlspecialchars($note['text']) ?></td>
				<td class="priority"><?= $note['priority'] ?></td>
			</tr>
			<?php endforeach; ?>
		</table>
		<?php endif; ?>
	</body>
</html>
