<?php
	App::uses('AppModel', 'Model');

	class Comment extends AppModel{
		// モデル名の指定
		public $name = 'Comment';

		// アソシエーション
		public $belongsTo = array(
			'refChara' => array(
				'className' => 'Chara',
				'foreignKey' => 'chara_id',
				),
			'refUser' => array(
				'className' => 'User',
				'foreignKey' => 'user_id'));

		// 主キー
		public $primaryKey = 'id';
	}
?>