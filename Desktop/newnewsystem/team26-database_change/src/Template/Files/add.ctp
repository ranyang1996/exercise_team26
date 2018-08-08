<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\File $file
 */
?>
<head>
    <?php echo $this->Html->css('register'); ?>
    <!-- Bootstrap core CSS -->
    <script src="../assets/js/chart-master/Chart.js"></script>
</head>
<body>
<div id="page-wrapper" style="min-height: 248px;">
<div class="files form large-9 medium-8 columns content">
    <?= $this->Form->create($file, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add File') ?></legend>
        <?php
            echo $this->Form->control('file_name');
            echo $this->Form->control('category');
            echo $this->Form->input('file', ['type' => 'file']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Html->link('Cancel', ['action' => 'index']);?>
    <?= $this->Form->end() ?>
</div>
</div>
</body>
