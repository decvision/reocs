<?php

App::uses('AppModel', 'Model');

class Chara extends AppModel{
    // モデル名の指定
    public $name = 'Chara';
    // アソシエーション
    public $belongsTo = array(
      'refUser' => array('className' => 'User',
                          'foreignKey' => 'user_id',
                          'fields' => array('user_code', 'user_name')
                        ));
    public $hasMany = array(
      'comments' => array('className' => 'Comment',
                          'foreignKey' => 'chara_id',
                          // コメントは最新順で取得
                          'order' => 'comments.created desc',
                          'limit' => 20
                          ));

    // 定数定義
    const THUMB_LIST = 'list';
    const THUMB_SQUARE = 'square';
    const THUMB_VIEW = 'view';
    const COLORS = 'chara_colors';
    const SEX = 'chara_sex';

    // 主キー
    public $primaryKey = 'id';
    public $actsAs = array(
                           'Search.Searchable',
                           'Upload.Upload' => array(
                                                    'image' => array(
                                                                     'fields' => array('dir' => 'image_path', 'type' => 'image_type'),
                                                                     'mimetypes' => array('image/jpeg', 'image/gif', 'image/png'),
                                                                     'extensions' => array('jpg', 'jpeg', 'JPG', 'JPEG', 'gif', 'GIF', 'png', 'PNG'),
                                                                     'maxSize' => 10485760, //10MB
                                                                     'path' => '{ROOT}webroot{DS}img{DS}{model}{DS}',
                                                                     'thumbnailSizes' => array(
                                                                                               'list' => '180l',
                                                                                               'square' => '135x135',
                                                                                               'view' => '620mw'
                                                                                               ),
                                                                     'thumbnailMethod' => 'php'
                                                                     )
                                                    )
                           );
  
    public $filterArgs = array(
        'user_id' => array('type' => 'value'),
        'color' => array('type' => 'value'),
        'sex' => array('type' => 'value')
      );

    // 直近作成のモデルを指定された数取得する
    public function findRecentCreated($limit = 10){
      return $this->find('all', array(
              'order' => array('created' => 'DESC'),
              'limit' => $limit
            ));
    }

    public function findTargetUserCreated($user_id = null, $limit = 10){
      if($user_id == null){
        return array();
      }
      return $this->find('all', array(
          'order' => array('created' => 'DESC'),
          'limit' => $limit,
          'conditions' => array('Chara.user_id' => $user_id)
        ));
    }
}
        
        
