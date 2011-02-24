<?PHP
// Copyright (c) 2011 Martin Ueding <dev@martin-ueding.de>

include('login.inc.php');

$note = mysql_real_escape($_POST['note']);

// TODO save new tags (if any) to DB


$insert_sql = 'INSERT INTO notecapture_notes SET note="'.$note.'"';
// TODO add tags to sql query
perform_query($sql);

header('location:index.php');
?>
