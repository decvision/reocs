<?php
class User extends AppModel{
    // モデル名の指定
    public $name = 'User';
    // 主キー
    public $primaryKey = 'user_id';
    // バリデーションの設定
    public $validate = array(
                             'user_code' => array(
                                                  array(
                                                        'rule' => 'notEmpty',
                                                        'required' => true,
                                                        'message' => 'ユーザIDを入力してください'
                                                        ),
                                                  array(
                                                        'rule' => 'isUnique',
                                                        'message' => '指定されたユーザIDは既に使用されています'
                                                        )
                                                  ),
                             'user_name' => array(
                                                  array(
                                                        'rule' => 'notEmpty',
                                                        'required' => true,
                                                        'message' => 'ユーザ名を入力してください'
                                                        )
                                                 ),
                             'password' => array(
                                                 array(
                                                       'rule' => array('minLength', 4),
                                                       'required' => true,
                                                       'message' => 'パスワードは４文字以上で設定してください'
                                                       )
                                                 ),
                             'mail_address' => array(
                                                     array(
                                                           'rule' =>'email',
                                                           'required' => true,
                                                           'message' => 'メールアドレスを入力してください'
                                                           )
                                                     )
                             );

    // 保存前にハッシュ値変換を行います
    public function beforeSave($option=array()){
        $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
        return true;
    }
}
                                                                                     