<?php echo $this->Html->css('common'); ?>
<!-- 左カラム -->
<div id='left-column' class='col-xs-5'>
	<!-- プロフィールカード -->
	<div id='profile-card'>
	</div>
	<!-- ステータスエリア-->
	<div id='status'>
		<p class='label'>プロフィール</p>
	</div>
</div>
<!-- 右カラム-->
<div id='right-column' class='col-xs-7'>
	<!-- 投稿キャラクター -->	
	<div class='characters-area'>
		<p class='label'>投稿キャラクター</p>
		<ul>
		<?php foreach ( ClassRegistry::init('Chara') -> findTargetUserCreated($user['User']['id']) as $image): ?>
		<li><?php echo $this->Html->link( $this->Chara->getImage($image, Chara::THUMB_SQUARE), array('controller' => 'charas', 'action' => 'view', $image['Chara']['id']), array('escape' => false)); ?></li>
		<?php endforeach; ?>
		</ul>
		<?php echo $this->Form->postLink($this->Html->para('more', 'もっとみる'), array( 
			'controller' => 'charas',
			'action' => 'clist',
			'user_id' => $user['User']['id']), array('escape' => false)); ?>
	</div>
	<!-- 描き合ったキャラクター -->
	<div class='characters-area'>
		<p class='label'>描き合いキャラクター</p>
		<ul>
		<?php foreach ( ClassRegistry::init('Chara') -> findTargetUserCreated($user['User']['id']) as $image): ?>
		<li><?php echo $this->Html->link( $this->Chara->getImage($image, Chara::THUMB_SQUARE), array('controller' => 'charas', 'action' => 'view', $image['Chara']['id']), array('escape' => false)); ?></li>
		<?php endforeach; ?>
		</ul>
		<?php echo $this->Form->postLink($this->Html->para('more', 'もっとみる'), array( 
			'controller' => 'charas',
			'action' => 'clist',
			'user_id' => $user['User']['id']), array('escape' => false)); ?>
	</div>
</div>

