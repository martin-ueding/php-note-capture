<?php
# Copyright © 2013-2014 Martin Ueding <dev@martin-ueding.de>

require_once('Notes.php');

$notes = new Notes();

if (isset($_POST['text'])) {
    $notes->addNote($_POST['text'], $_POST['priority'], $_POST['date'] == 'true');
}

$hour = date("H");
if (20 <= $hour || $hour <= 7) {
    $cssfile = "night";
}
else {
    $cssfile = "day";
}

#$cssfile = "night";

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
        <form action="" method="post" name="mainform">
            <input type="text" name="text" autocomplete="off" />
            <select name="priority" size="1">
                <option value=""></option>
                <option value="H">high</option>
                <option value="M">medium</option>
                <option value="L">low</option>
            </select>
            <input type="checkbox" name="date" value="true" />
            <input type="submit" />
        </form>

        <p><?= count($notes->data) ?> notes saved. <a href="list.php">Show notes</a></p>

        <p>Powered by PHP</p>
    </body>
</html>
