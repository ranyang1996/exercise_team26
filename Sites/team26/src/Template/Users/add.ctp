<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Attendances'), ['controller' => 'Attendances', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Attendance'), ['controller' => 'Attendances', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Enrolments'), ['controller' => 'Enrolments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Enrolment'), ['controller' => 'Enrolments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('status');
            echo $this->Form->control('entered', ['empty' => true]);
            echo $this->Form->control('entered_user');
            echo $this->Form->control('last_updated', ['empty' => true]);
            echo $this->Form->control('last_updated_user');
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
    <?= $this->Form->end() ?>
</div>
