<?php

# image.model.php

# load the Model library if it has not been done
require_once '../libraries/model.lib.php';

class image extends Model {

	# tell the page model what table it belongs to
	protected $table = 'images';

	# we need to do this for the model to work
	public function __construct() {
		parent::__construct($this->table);
	}

}