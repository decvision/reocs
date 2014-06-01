<?php
App::uses('AppModel', 'Model');

class MySampleData extends AppModel{
    public $validate = array(
                             'name' => 'notEmpty', 
                             'mail' => 'email', 
                             'tel' => 'alphaNumeric'
                             );
}