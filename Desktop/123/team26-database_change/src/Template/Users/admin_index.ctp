<?php
/**
 * Created by PhpStorm.
 * User: mc
 * Date: 14/4/18
 * Time: 8:01 AM
 */
echo $this->Html->css('home');
 ?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Manage Customers') ?></li>
        <li><?= $this->Html->link(__('Add New Customer'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Search for Customer'), ['controller' => 'Users', 'action' => 'search']) ?></li>
        <li><?= $this->Html->link(__('Edit my profile'), ['controller' => 'Users', 'action' => 'edit']) ?></li>
   </ul>
</nav>


<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('entered') ?></th>
                <th scope="col"><?= $this->Paginator->sort('entered_user') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_updated') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_updated_user') ?></th>
                <th scope="col"><?= $this->Paginator->sort('given_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dob') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
<!--                <th scope="col">--><?//= $this->Paginator->sort('password') ?><!--</th> -->
                <th scope="col"><?= $this->Paginator->sort('mobile') ?></th>
                <th scope="col"><?= $this->Paginator->sort('postcode') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= $this->Number->format($user->status) ?></td>
                <td><?= h($user->entered) ?></td>
                <td><?= $this->Number->format($user->entered_user) ?></td>
                <td><?= h($user->last_updated) ?></td>
                <td><?= $this->Number->format($user->last_updated_user) ?></td>
                <td><?= h($user->given_name) ?></td>
                <td><?= h($user->last_name) ?></td>
                <td><?= h($user->dob) ?></td>
                <td><?= h($user->email) ?></td>
<!--                <td>--><?//= h($user->password) ?><!--</td>-->
                <td><?= $this->Number->format($user->mobile) ?></td>
                <td><?= $this->Number->format($user->postcode) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'softdelete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>



<!DOCTYPE html>
<html>
<head>
    <title>Search Customer</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<body>
<div>Search by customer name, mobile number or email:</div>
<form method="GET" action="">
    <input type="text" name="q" placeholder="enter customer name, mobile, or email address">
    <input type="submit" name="search" value="Search">
</form>

</body>
</html>



