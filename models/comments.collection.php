<?php

# comments.collection.php

require_once '../libraries/collection.lib.php';

class Comments_Collection extends Collection {

	protected $table = 'comments';

	public function __construct($where = false) {
		parent::__construct($this->table, $where);
	}

	public function getComments(){
		$comments = $this->db
			->select('*')
			->from('comments')
			->where(['deleted' => 0])
			->get();

		foreach($comments as $key => $comment){
			$model = new Model($this->table, false);

			$model->fill($comment);

			$comments[$key] = $model;
		}

		$this->items = $comments;
	}

	public function getCommentsByImage($image_id) {
		$comments = $this->db
			->select('*')
			->from('comments')
			->where_and(
				['deleted' => 0,
				 'image_id' => $image_id]
				)
			->get();

		foreach($comments as $key => $comment){
			$model = new Model($this->table, false);

			$model->fill($comment);

			$comments[$key] = $model;
		}

		$this->items = $comments;
	}

}