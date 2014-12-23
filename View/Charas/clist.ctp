<?php echo $this->Html->css('common'); ?>
<h2>キャラクター一覧</h2>

<div class="row">
    <div class="col-xs-12">
        <div id='left-column' class="col-xs-3">
            <h3>検索</h3>
            <?php echo $this->Form->create('Chara', array('type' => 'post')); ?>
            <?php echo "カラー" ?>
            <?php echo $this->Form->input('color', 
                array(
                        'type' => 'select',
                        'multiple' => 'checkbox',
                        'options' => Configure::read(Chara::COLORS),
                        'label' => false
                    )); ?>
            <?php echo "性別" ?>
            <?php echo $this->Form->input('sex',
                array(
                        'type' => 'select',
                        'multiple' => 'checkbox',
                        'options' => Configure::read(Chara::SEX),
                        'label' => false
                    )); ?>
            <?php echo $this->Form->end('検索する'); ?>
        </div>
        <div id="views">
            <div class="col-xs-9">
                <?php foreach($images as $image): ?>
                <div class="col-xs-3">
                    <table class="rect">
                        <tr>
                            <td class="image">
                                <?php echo $this->Html->link( $this->Chara->getImage($image, Chara::THUMB_LIST), array("action" => "view", $image["Chara"]["id"]), array("escape" => false)); ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="text">
                                <p class="align-right charaName">
                                    <?php $chara_name = $image["Chara"]["name"]; ?> 
                                    <?php if($chara_name == null){ $chara_name = "UnTitle";} ?>
                                    <?php echo h($chara_name); ?>
                                </p> 
                                <p class="align-right artist">
                                    <?php echo h($image["refUser"]["user_name"]); ?>
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>
                <?php endforeach ?>
            </div>
            <div class="col-xs-offset-3 col-xs-9 text-center">
                <?php echo $this->Paginator->pagination(array("ul" => "pagination")); ?>  
            </div>
        </div>
    </div>
</div>
