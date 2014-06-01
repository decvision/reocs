<h2><?php echo $viewTitle; ?></h2>

 <div class="row">
    <div class="span9">
    <ul class="thumbnails">
　	
	<?php foreach($new_images as $new_image): ?>
    <li class="span3">
    <?php header('Content-Type: image/jpeg');
	echo $this->Html->link( $this->Html->image('Character/'.$new_image['Character']['image_path'].'/thumb150_'.$new_image['Character']['image'], array('alt' => 'b')), array('action' => 'view'), array('escape' => false)); ?>
    </li>
    <?php endforeach ?>

    </ul>
    </div>
    <div class="span3">
    </div>
    </div>