<?php echo $this->Form->create('Chara', array('type' => 'file')); ?>
<?php echo $this->Form->input('name'); ?>
<?php echo $this->Form->input('image', array('type' => 'file')); ?>
<?php echo $this->Form->input('image_path', array('type' => 'hidden')); ?>
<?php echo "カラー" ?>
<?php echo $this->Form->select('color', Configure::read(Chara::COLORS), array('empty' => false)); ?>
<?php echo "性別" ?>
<?php echo $this->Form->select('sex', Configure::read(Chara::SEX), array('empty' => false)); ?>
<?php echo $this->Form->input('user_id', array('value' => h($user['id']), 'type' => 'hidden')); ?>
<?php echo $this->Form->end('Submit'); ?>
