<?php
# Copyright © 2013 Martin Ueding <dev@martin-ueding.de>

require_once('Notes.php');

$notes = new Notes();

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
	<body>
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

		<p><?= count($notes->data) ?> notes saved. <a href="index.php">New note</a></p>
	</body>
</html>
