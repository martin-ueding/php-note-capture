<?PHP
// Copyright (c) 2011 Martin Ueding <dev@martin-ueding.de>


// TODO insert MySQL connect data

function perform_query ($sql) {
	$erg = mysql_query($sql);

	$error = mysql_error();

	if (!empty($error)) {
		echo '<br />Error with query:<br />SQL: '.$sql.'<br />Error: '.$error.'<br />';
	}
	return $erg;
}

?>
