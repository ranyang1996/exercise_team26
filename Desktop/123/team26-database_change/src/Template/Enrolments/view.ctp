<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Enrolment $enrolment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Enrolment'), ['action' => 'edit', $enrolment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Enrolment'), ['action' => 'delete', $enrolment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enrolment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Enrolments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Enrolment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="enrolments view large-9 medium-8 columns content">
    <h3><?= h($enrolment->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Course') ?></th>
            <td><?= $enrolment->has('course') ? $this->Html->link($enrolment->course->id, ['controller' => 'Courses', 'action' => 'view', $enrolment->course->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($enrolment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Id') ?></th>
            <td><?= $this->Number->format($enrolment->user_id) ?></td>
        </tr>
    </table>
</div>
