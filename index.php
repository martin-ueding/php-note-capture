<?PHP
// Copyright (c) 2011 Martin Ueding <dev@martin-ueding.de>

// TODO display link to create new note

$sql_all_notes = 'SELECT * FROM notecapture_notes ORDER BY notes_creation_date';
$erg_all_notes = perform_query($sql_all_notes);

// TODO display all notes


// TODO display links to tags
?>
