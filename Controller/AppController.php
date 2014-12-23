<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    public $components = array(
                               'DebugKit.Toolbar',
                               'Session', 
                               'Auth' => array(
                                                // ログイン後の移動先
                                               'loginRedirect' => array(
                                                                        'controller' => 'users',
                                                                        'action' => 'index'
                                                                        ),
                                               // ログアウト後の移動先
                                               'logoutRedirect' => array(
                                                                         'controller' => 'users',
                                                                         'action' => 'login'
                                                                         ),
                                               // usernameにuser_codeを割り当てる
                                               'authenticate' => array(
                                                                       'Form' => array(
                                                                                       'userModel' => 'User',
                                                                                       'fields' => array(
                                                                                                         'username' => 'user_code',
                                                                                                         'password' => 'password'
                                                                                                         )
                                                                                       )
                                                                       ),
                                               'flash' => array(  
                                                                'element' => 'alert',  
                                                                'key' => 'auth',  
                                                                'params' => array(  
                                                                                  'plugin' => 'BoostCake',  
                                                                                  'class' => 'alert-error'  
                                                                                    ),  
                                                                  ),  
                                               )
                               );

    public $helpers = array(  
                            'Session',  
                            'Html' => array('className' => 'BoostCake.BoostCakeHtml'),  
                            'Form' => array('className' => 'BoostCake.BoostCakeForm'),  
                            'Paginator' => array('className' => 'BoostCake.BoostCakePaginator'),  
                              );  

    public function beforeFilter(){
        // 全画面でログイン情報を取得できるようにするため、
        // Userモデルの情報を渡す
        $this->set('user', $this->Auth->user());
        // $this->layout->'main'; // レイアウトの指定
    }

    public function getUrlquery($par=Array(),$op=0){
        $url = parse_url($_SERVER["REQUEST_URI"]);
        if(isset($url["query"])) parse_str($url["query"],$query);
        else $query = Array();
        foreach($par as $key => $value){
            if($key && is_null($value)) unset($query[$key]);
            else $query[$key] = $value;
        }
        $query = str_replace("=&", "&", http_build_query($query));
        $query = preg_replace("/=$/", "", $query);
        return $query ? (!$op ? "?" : "").htmlspecialchars($query, ENT_QUOTES) : "";
    }
}
