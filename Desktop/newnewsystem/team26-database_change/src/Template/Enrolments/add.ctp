<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Enrolment $enrolment
 */
?>
<?php echo $this->Html->css('custom'); ?>
<div id="page-wrapper" style="min-height: 248px;">
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="enrolments form large-9 medium-8 columns content">
    <?= $this->Form->create($enrolment) ?>
    <fieldset>
        <legend><?= __('Add Enrolment') ?></legend>
        <?php
            echo $this->Form->control('user_id');
            echo $this->Form->control('course_id', ['options' => $courses, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</div>
