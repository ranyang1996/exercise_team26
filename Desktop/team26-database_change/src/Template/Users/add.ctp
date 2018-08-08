<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>



    <?php echo $this->Html->css('register'); ?>
<head>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/jquery.validate.min.js"></script>
    <script src="../js/register.js"></script>
</head>
<body>
<div id="page-wrapper" style="min-height: 248px;">
  <div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
/*            echo $this->Form->control('status');
            echo $this->Form->control('entered', ['empty' => true]);
            echo $this->Form->control('entered_user');
            echo $this->Form->control('last_updated', ['empty' => true]);
            echo $this->Form->control('last_updated_user');*/
            echo $this->Form->control('given_name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('dob', ['empty' => true]);
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('mobile');
            echo $this->Form->control('postcode');
            echo $this->Form->control('account_type');
        ?>
    </fieldset>
      <?= $this->Form->button(__('Submit')) ?>
      <?= $this->Html->link('Cancel', ['action' => 'index']);?>
    <?= $this->Form->end() ?>
  </div>
</div>

</body>