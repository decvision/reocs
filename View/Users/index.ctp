<p>ようこそ！<?php echo h($userinfo['user_name']); ?> さん</p>
<p>あなたの登録メールアドレスは<?php echo h($userinfo['mail_address']); ?>です。</p>
<h2> ここはIndexページです</h2>
<ul>
<li>
 <?php echo $this->Html->link('新規ユーザ作成', 'add', array()); ?>
</li>
<li>
	<?php echo $this->Html->link('新規キャラクター投稿', array(
			'controller' => 'characters', 
			'action' => 'regist'
		)); ?>
</li>
</ul>

<ul>
	<li>
 <?php echo $this->Html->link('新着キャラクター', array(
 		'controller' => 'characters',
 		'action' => 'clist',
 		'new'
 	)); ?></li>
 	<li>
<?php echo $this->Html->link('登録キャラクター', array(
 		'controller' => 'characters',
 		'action' => 'clist',
 		'mine'
 	)); ?>
 </li>
</ul>