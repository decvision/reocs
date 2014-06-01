<?php
class CharactersController extends AppController{

	// 使用モデルの指定
    public $uses = array('Character');
    public $helpers = array('Html');
    
    public function beforeFilter(){
        // 親クラスのbeforeFilterの読み込み
        parent::beforeFilter();
    }

    // 汎用イラスト一覧
    public function clist($type = null){
    	// 新着イラスト
    	if($type == 'new'){
    		$this->set('viewTitle', '新着キャラクター一覧');
    	}
    	elseif ($type == 'mine') {
    		$this->set('viewTitle', '登録キャラクター一覧');
    	}

    	// 新着画像
        $this->paginate = array(
                                'limit' => 5,
                                'order' => array(
                                                 'Character.created' => 'DESC'
                                                 )
                                );
        $this->set('new_images', $this->paginate('Character'));
    }

    // キャラクター登録
    public function regist(){

    	// 画像投稿フォーム
        if($this->request->is('post')){
            $this->Character->save($this->request->data);
            $this->Session->setFlash(__('キャラクターを投稿しました'));
            $this->redirect(array(
            	'controller'=> 'users', 
            	'action' => 'index'));
        }
    }
}

?>