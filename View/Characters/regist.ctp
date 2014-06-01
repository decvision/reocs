<?php echo $this->Form->create('Character', array('type' => 'file')); ?>
    <?php echo $this->Form->input('character_name'); ?>
    <?php echo $this->Form->input('image', array('type' => 'file')); ?>
 <?php echo $this->Form->input('image_path', array('type' => 'hidden')); ?>
 <?php echo $this->Form->input('user_code', array('value' => h($user['user_code']), 'type' => 'hidden')); ?>
 <?php echo $this->Form->input('color', array('value'=>'Black', 'type' => 'hidden')); ?>
 <?php echo $this->Form->end('Submit'); ?>
