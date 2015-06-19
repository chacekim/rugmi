<?php

# comment.model.php

# load the Model library if it has not been done
require_once '../libraries/model.lib.php';

class Comment extends Model {

	# tell the page model what table it belongs to
	protected $table = 'comments';

	# we need to do this for the model to work
	public function __construct() {
		parent::__construct($this->table);
	}

}