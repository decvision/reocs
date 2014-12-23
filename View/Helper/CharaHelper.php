<?php
	App::uses('AppHelper', 'View/Helper');

	class CharaHelper extends AppHelper{

		// 使用ヘルパー
		public $helpers = array('Html');

		public function getImage($model, $thumb){
      		return $this->Html->image("Chara/".$model['Chara']['image_path']."/".$thumb."_".$model['Chara']['image'], 
        		array("alt" => $model['Chara']['name']));
    	}
	}