<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\File $file
 */
?>
<head>
    <?= $this->Html->css('register') ?>
</head>
<body>
<div id="page-wrapper" style="min-height: 248px;">

<div class="files form large-9 medium-8 columns content">
    <?= $this->Form->create($file) ?>
    <fieldset>
        <legend><?= __('Edit File') ?></legend>
        <?php
            echo $this->Form->control('file_name');
            echo $this->Form->control('file');
            echo $this->Form->control('category');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
   <?= $this->Html->link('Cancel', ['action' => 'index']);?>
    <?= $this->Form->end() ?>
</div>
</div>
</body>