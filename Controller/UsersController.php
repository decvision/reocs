<?php
class UsersController extends AppController{
    // 使用モデルの指定
    public $uses = array('User');
    public $helpers = array('Html', 'Chara');
    
    function beforeFilter(){
        // 親クラスのbeforeFilterの読み込み
        parent::beforeFilter();
        // 認証不要のページ指定
        $this->Auth->allow('login', 'logout', 'add');
    }

    // indexアクション（認証必要）
    function index(){
        $this->set('title_for_layout', 'メインページ');

        // アクセス情報をビューに渡す
        $this->set('userinfo', $this->Auth->user());
    }

    // ログインアクション（認証不要）
    function login(){
        //$this->layout = "LoginForm";
        //$this->set("login_for_layout", "ログイン");
        // POST送信なら
        if($this->request->is('post')){
            // ログインOKなら
            if($this->Auth->login()){
                // Auth指定のログインページへ移動
                return $this->redirect($this->Auth->redirect());
            }
            // ログインNGなら
            else{
                $this->Session->setFlash(__('ユーザIDかパスワードが違います'), 'default', array(), 'auth');
            }
        }
    }

    // ログアウトアクション（認証不要）
    function logout(){
        $this->Auth->logout();
    }

    // ユーザ追加（認証不要）
    function add(){
        // POST送信なら
        if($this->request->is('post')){
            // ユーザ作成
            $this->User->create();
            // リクエストデータが保存できたら
            if($this->User->save($this->request->data)){
                $this->Session->setFlash(__('新規ユーザを追加しました'));
                $this->redirect(array('action' => 'index'));
            }
            // 保存できなかったら
            else{
                $this->Session->setFlash(__('登録できませんでした。やり直してください。'));
            }
        }
    }

    function profile($user_code = null){
        if($user_code == null){
            $this->redirect('/pages/notfound');
            return;
        }
        $user = $this->User->find('first', array('conditions' => array('User.user_code' => $user_code)));
        if($user == null){
            $this->redirect('/pages/notfound');
            return;    
        }
        $this->set('user', $user);
    }
}
                

                              