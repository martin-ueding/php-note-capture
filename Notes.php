<?PHP
# Copyright © 2013 Martin Ueding <dev@martin-ueding.de>

/**
 * Models a collection of notes.
 *
 * They can be saved in a JSON format and then post-processed with some script.
 */

class Notes {
	private $path = 'notes.js';

	public $data = array();

	public function __construct() {
		if (file_exists($this->path)) {
			$this->data = json_decode(file_get_contents($this->path), true);
		}
	}

	public function __destruct() {
		$encoded = json_encode($this->data);

		$h = fopen($this->path, 'w');
		if ($h === false) {
			die();
		}
		fwrite($h, $encoded);
		fclose($h);
	}

	public function addNote($text) {
		# Filter out empty notes.
		if (strlen($text) == 0) {
			return;
		}

		$newNote = array(
			'text' => $text,
		);

		# Filter out duplicate notes.
		foreach ($this->data as $note) {
			if ($note == $newNote) {
				return;
			}
		}

		$this->data[] = $newNote;
	}

	public function reset() {
		$this->data = array();
	}
}

?>
