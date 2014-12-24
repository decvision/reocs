<?php echo $this->Html->css('common'); ?>
<div class="row">
	<div class="col-xs-12">
		<div class="col-xs-8">
			<!-- Name -->
			<table>
				<tr>
					<td rowspan="2" style="height:100px; width:110px;">
						<?php echo $orb_img; ?>
					</td>
					<td style="height:30px; vertical-align:bottom;">
						<?php echo "閲覧数：".$view_count."回"; ?>
					</td>
				</tr>
				<tr>
					<td style="height:50px; vertical-align:middle; font-size:36px; font-weight: bold;">
						<?php echo $chara_data['Chara']['name']; ?>
					</td>
				</tr>
			</table>
			<!-- Status -->
			<div style="height:60px; margin:6px 0px;">
			</div>
		</div>
		<div class="col-xs-4">
			<!-- Artist -->
			<div style="display:inline-block; background-color:#DDDDDD; width:340px; height: 100px; margin: 0px 5px 5px;">
				<p style="display:inline-block; text-align:left; font-size:18px; margin:6px auto 6px 12px;">
					<strong><?php echo "Artist："; ?></strong>
					<?php echo $this->Html->link($chara_data['refUser']['user_name'],
													array(
														'controller' => 'users',
														'action' => 'profile',
														$chara_data['refUser']['user_code']
													)); ?>
				</p>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12">
		<hr style="border:solid 2px #EEEEEE;">
		<div class="col-xs-8">
			<!-- Image -->
			<div class="text-center">
				<?php echo $this->Chara->getImage($chara_data, Chara::THUMB_VIEW); ?>
			</div>
		</div>
		<div class="col-xs-4">
			<!-- Comment -->
			<div class='comment-area'>
				<?php 
				echo $this->Form->create('Comment', array('action'=>'add', 'type' => 'post'));
				echo $this->Form->textarea('status', array('label'=>'コメント', 'maxLength'=>100));
				echo $this->Form->input('Comment.chara_id', array('type'=>'hidden', 'value'=>$chara_data['Chara']['id']));
				echo $this->Form->input('Comment.user_id', array('type'=>'hidden', 'value'=>$login_user['id']));
				echo $this->Form->end(array('label'=>'コメント', 'class'=>'submit')); 
				?>
				<p　class='count'>残り<span class='count'>100</span>文字</p>
				<div class='clear'></div>
				<ul>
					<?php foreach ($chara_data['comments'] as $comment): ?>
						<li>
							<?php echo $this->Form->postLink($this->Html->para('poster', $comment['refUser']['user_name']), array( 
								'controller' => 'users',
								'action' => 'profile',
								$comment['refUser']['user_code']), array('escape' => false)); ?>
							<?php echo __($comment['status']) ?>
							<hr>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>
</div>



<!-- SCLIPT -->
<script>
$(function(){
	var countMax = 100;
	$('div.comment-area textarea').bind('keydown keyup keypress change',function(){
		var thisValueLength = $(this).val().length;
		var countDown = (countMax)-(thisValueLength);
		$('div.comment-area span.count').html(countDown);

		if(countDown < 0){
			$('div.comment-area span.count').css({color:'#ff0000',fontWeight:'bold'});
		} else {
			$('div.comment-area span.count').css({color:'#000000',fontWeight:'normal'});
		}
	});
	$(window).load(function(){
		$('.count').html(countMax);
	});
});
</script>