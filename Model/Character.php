<?php

App::uses('AppModel', 'Model');

class Character extends AppModel{
    // モデル名の指定
    public $name = 'Character';
    // 主キー
    public $primaryKey = 'character_id';
    public $actsAs = array(
                           'Search.Searchable',
                           'Upload.Upload' => array(
                                                    'image' => array(
                                                                     'fields' => array('dir' => 'image_path', 'type' => 'image_type'),
                                                                     'mimetypes' => array('image/jpeg', 'image/gif', 'image/png'),
                                                                     'extensions' => array('jpg', 'jpeg', 'JPG', 'JPEG', 'gif', 'GIF', 'png', 'PNG'),
                                                                     'maxSize' => 2097152, //2MB
                                                                     'path' => '{ROOT}webroot{DS}img{DS}{model}{DS}',
                                                                     'thumbnailSizes' => array(
                                                                                               'thumb150' => '150x150'
                                                                                               ),
                                                                     'thumbnailMethod' => 'php'
                                                                     )
                                                    )
                           );
}
        
        
