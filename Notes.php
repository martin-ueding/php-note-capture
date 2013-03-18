<?PHP
# Copyright © 2013 Martin Ueding <dev@martin-ueding.de>

/**
 * Models a collection of notes.
 *
 * They can be saved in a JSON format and then post-processed with some script.
 */

class Notes {
	private $path = 'notes.js';

	private $data = array();

	public function __construct() {
		echo 'Construct';

		if (file_exists($this->path)) {
			$this->data = json_decode($this->path);
		}
	}

	public function __destruct() {
		echo 'Destruct';

		$h = fopen($this->path, 'w');
		if ($h === false) {
			die('Cannot save. Abort.');
		}
		fwrite($h, json_encode($this->data));
		fclose($h);
	}

	public function addNote($text) {
		$note = array(
			'text' => $text,
		);
		array_push($note);
	}
}

?>
