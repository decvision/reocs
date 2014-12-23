<?php
class CharasController extends AppController{

	// 使用モデルの指定
    public $uses = array('Chara');
    public $helpers = array('Html', 'Chara');
    public $components = array('Search.Prg');
    
    public function beforeFilter(){
        // 親クラスのbeforeFilterの読み込み
        parent::beforeFilter();
    }

    // 汎用イラスト一覧
    /* 
     * 引数に検索条件を渡すことで、検索が行われた状態での
     * 汎用一覧を開く
     */
    public function clist(){

        $userinfo = $this->Auth->user();

        $this->Prg->commonProcess();
    	$this->paginate = array(
             'limit' => 16,
             'order' => array('created' => 'DESC'),
             'conditions' => $this->Chara->parseCriteria($this->passedArgs)
            );
        $this->set('images', $this->paginate('Chara'));
    }

    // キャラクター登録
    public function regist(){
        // 画像投稿フォーム
        if($this->request->is('post')){
            $this->Chara->save($this->request->data);
            $this->Session->setFlash(__('キャラクターを投稿しました'));
            $this->redirect(array(
                'controller'=> 'users', 
                'action' => 'index'));
        }
    }


    // キャラクタービュー
    public function view($id = null){
        App::uses('HtmlHelper', 'View/Helper');
        // ログインユーザ情報セット
        $this->set('login_user', $this->Auth->user());
        if($id != null){
            $chara_data = $this->Chara->find('first', array(
                'conditions' => array(
                    'Chara.id' => $id)));
            if($chara_data != null){
                // 閲覧数+1
                $view_count = $chara_data['Chara']['view_count'] + 1;
                $conditions = array('Chara.id' => $chara_data['Chara']['id']);
                $fields = array('view_count' => 'view_count + 1');
                $this->Chara->updateAll($fields, $conditions);
                // 色によって表示画像を変える
                $this->Html = new HtmlHelper(new View());
                $color = $chara_data['Chara']['color'];
                $orb_img = null;
                if($color == 'red'){
                    $orb_img = $this->Html->image('orb/red.gif', array('alt' => 'red'));
                }
                elseif ($color == 'blue') {
                    $orb_img = $this->Html->image('orb'.DS.'blue.gif', array('alt' => 'blue'));
                }
                elseif ($color == 'green') {
                    $orb_img = $this->Html->image('orb'.DS.'green.gif', array('alt' => 'green'));
                }
                elseif ($color == 'white') {
                    $orb_img = $this->Html->image('orb'.DS.'white.gif', array('alt' => 'white'));
                }
                elseif ($color == 'black') {
                    $orb_img = $this->Html->image('orb'.DS.'black.gif', array('alt' => 'black'));
                }
                else{
                    $orb_img = $this->Html->image('orb'.DS.'none.gif', array('alt' => 'none'));
                }
                $this->set('orb_img', $orb_img);

                // キャラクターデータをViewに渡す
                $this->set('view_count', $view_count);
                $this->set('chara_data', $chara_data);
            }
            else{
                    // エラーページに遷移
                $this->redirect('/pages/notfound');
            }
        }
        else{
                // エラーページに遷移
            $this->redirect('/pages/notfound');
        }
    }
}

?>