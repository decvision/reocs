<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>ログインフォーム</title>
</head>
<body>
 <?php echo $this->Form->create('User', array(  
                                              'inputDefaults' => array(  
                                                                       'div' => 'form-group',  
                                                                       'wrapInput' => false,  
                                                                       'class' => 'form-control'  
                                                                         ),  
                                              'class' => 'well'  
                                                )); ?>  
<fieldset>  
<legend>Login</legend>  
 <?php echo $this->Form->input('user_code', array(  
                                                  'type' => 'text',
                                                  'label' => 'User ID',  
                                                  'placeholder' => 'User ID input…',  
                                                  )); ?>
 <?php echo $this->Form->input('password', array(  
                                                 'type' => 'password',
                                                 'label' => 'Password',  
                                                 'placeholder' => 'Password input…',  
                                                  )); ?>  
 <?php echo $this->Form->submit('Submit', array(  
                                                'div' => false,  
                                                'class' => 'btn btn-default'  
                                                  )); ?>  
 </fieldset>  
 <?php echo $this->Form->end(); ?>  
 </body>
 </html>
 
 
 
