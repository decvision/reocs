<?php
class CommentsController extends AppController{

	// 使用モデルの指定
    public $uses = array('Comment');
    public $helpers = array('Html', 'Chara');

    public function beforeFilter(){
        // 親クラスのbeforeFilterの読み込み
        parent::beforeFilter();
    }

    public function add(){
    	if($this->request->is('post')){
    		if($this->Comment->save($this->request->data)){
    			$this->Session->setFlash('コメントが完了しました');
    			$this->redirect( array('controller' => 'charas', 'action' => 'view', $this->data['Comment']['chara_id']));
    		}
    		else{
    			$this->Session->setFlash('コメントに失敗しました');
    		}
    	}
    }

}