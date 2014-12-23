<?php echo $this->Html->css('common'); ?>
<!-- 左カラム -->
<div class="col-xs-2">
	testhg
</div>
<!-- 右カラム -->
<div class="col-xs-10">
	<p>ようこそ！<?php echo h($userinfo['user_name']); ?> さん</p>
	<p>あなたの登録メールアドレスは<?php echo h($userinfo['mail_address']); ?>です。</p>
	<h2> Index.</h2>
	<ul>
		<li>
 			<?php echo $this->Html->link('新規ユーザ作成', 'add', array()); ?>
		</li>
		<li>
			<?php echo $this->Html->link('新規キャラクター投稿', array(
					'controller' => 'charas', 
					'action' => 'regist'
				)); ?>
		</li>
	</ul>

	<ul>
 		<li>
			<?php echo $this->Html->link('登録キャラクター', array(
 				'controller' => 'charas',
 				'action' => 'clist',
 				'mine'
 			)); ?>
		</li>
		<li>
			<?php echo $this->Html->link('マイプロフィール', array(
				'controller' => 'users',
				'action' => 'profile',
				$userinfo['user_code']
			)); ?>
		</li>
	</ul>

	<div class='carou-base'>
		<div class='text-left' style='margin-bottom: -10px;'>
			<h3>新着キャラクター</h3>
		</div>
		<div class='thumb-wrapper'>
    		<ul id='01' class='carousel' >
    			<?php foreach (ClassRegistry::init('Chara') -> findRecentCreated() as $new_chara): ?>
    				<li><?php echo $this->Html->link( $this->Chara->getImage($new_chara, Chara::THUMB_SQUARE), array("controller" => 'charas', "action" => "view", $new_chara["Chara"]["id"]), array("escape" => false)); ?></li>
    			<?php endforeach; ?>
    		</ul>
    		<div id="carouPrev-1" class="carouPrev"></div>
    		<div id="carouNext-1" class="carouNext"></div>
		</div>
		<div class='text-right' style='margin-top: -10px; margin-right: 20px;'>
			<?php echo $this->Html->link('もっとみる', array(
 					'controller' => 'charas',
 					'action' => 'clist'
 				)); ?>
		</div>
	</div>
	<div class='carou-base'>
		<div class='text-left' style='margin-bottom: -10px;'>
			<h3>投稿キャラクター</h3>
		</div>
		<div class='thumb-wrapper'>
    		<ul id='02' class='carousel' >
    			<?php foreach (ClassRegistry::init('Chara') -> findTargetUserCreated($userinfo['id']) as $new_chara): ?>
    				<li><?php echo $this->Html->link( $this->Chara->getImage($new_chara, Chara::THUMB_SQUARE), array("controller" => 'charas', "action" => "view", $new_chara["Chara"]["id"]), array("escape" => false)); ?></li>
    			<?php endforeach; ?>
    		</ul>
    		<div id="carouPrev-2" class="carouPrev"></div>
    		<div id="carouNext-2" class="carouNext"></div>
		</div>
		<div class='text-right' style='margin-bottom: -10px; margin-right: 20px;'>
			<?php echo $this->Html->link('もっとみる', 
				array(
 					'controller' => 'charas',
 					'action' => 'clist'
 					)
 				); ?>
		</div>
	</div>
	
</div>

<script>
	$("#01").carouFredSel({
		auto: false,
		circular: false,
		infinite: false,
		prev: "#carouPrev-1",
		next: "#carouNext-1" 
	});
	$("#02").carouFredSel({
		auto: false,
		circular: false,
		infinite: false,
		prev: "#carouPrev-2",
		next: "#carouNext-2" 
	});
	
</script>
