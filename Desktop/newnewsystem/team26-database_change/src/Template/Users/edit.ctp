<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<head>
    <!-- CUSTOM STYLES-->
    <?= $this->Html->css('register') ?>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/jquery.validate.min.js"></script>
    <script src="../js/register.js"></script>
</head>
<body>
<div id="page-wrapper" style="min-height: 248px;">
<nav class="large-3 medium-4 columns" id="actions-sidebar">
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
/*            echo $this->Form->control('status');
            echo $this->Form->control('entered', ['empty' => true]);
            echo $this->Form->control('entered_user');
            echo $this->Form->control('last_updated', ['empty' => true]);
            echo $this->Form->control('last_updated_user');
            echo $this->Form->control('dob', ['empty' => true]);
*/
            echo $this->Form->control('given_name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('email');
            echo $this->Form->control('mobile');
            echo $this->Form->control('postcode');
            echo $this->Form->control('files._ids', ['options' => $file]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Html->link('Cancel', ['action' => 'index']);?>
    <?= $this->Form->end() ?>
</div>
<div>
    <?php foreach ($user->files as $file): ?>
                <tr>
                    <td><?= h($file->file_name) ?></td>
                    <td><?= h($file->file) ?></td>
                    <td><?= h($file->category) ?></td>
                </tr>
     <?php endforeach; ?>
</div>
</div>
</body>