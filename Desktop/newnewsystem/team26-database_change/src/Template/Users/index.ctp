<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<html>
    <head>
    <?php echo $this->Html->css('custom'); ?>
     -->
    </head>
<body>
<div id="page-wrapper" ">
    <div class="row">
        <div>
            <?php
            echo $this->Form->create(null, ['valueSources' => 'query']);
            // You'll need to populate $authors in the template from your controller
            //echo $this->Form->control('id');
            // Match the search param in your table configuration
            echo $this->Form->control('Search');
            echo $this->Form->button('Filter', ['type' => 'submit']);
            echo $this->Html->link('Reset', ['action' => 'index']);
            echo $this->Form->end();
            ?>
        </div>
        <div class="col-lg-4">
            <h1 class="page-header" >Customer List</h1>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('given_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dob') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mobile') ?></th>
                <th scope="col"><?= $this->Paginator->sort('postcode') ?></th>
                <th scope="col"><?= $this->Paginator->sort('account_type') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= $this->Number->format($user->status) ?></td>
                <td><?= h($user->given_name) ?></td>
                <td><?= h($user->last_name) ?></td>
                <td><?= h($user->dob) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= $this->Number->format($user->mobile) ?></td>
                <td><?= $this->Number->format($user->postcode) ?></td>
                <td><?= h($user->account_type) ?></td>
                <td class="actions">

                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                    <br>
                    <?= $this->Form->postLink(__('Deactivate'), ['action' => 'softdelete', $user->id], ['confirm' => __('Are you sure you want to deactivate {0} {1}?', $user->given_name, $user->last_name)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        <?=$this->Html->script('jquery')?>
        <?=$this->Html->script('jquery-1.8.3.min')?>
        <!-- BOOTSTRAP SCRIPTS -->
        <?=$this->Html->script('bootstrap.min')?>
        <?=$this->Html->script('jquery.metisMenu')?>
        <!-- METISMENU SCRIPTS -->
        <?=$this->Html->script('custom')?>

        <!-- CUSTOM SCRIPTS -->

        <?=$this->Html->script('jquery.scrollTo.min')?>

        <?=$this->Html->script('jquery.nicescroll')?>
        <?=$this->Html->script('jquery.sparkline')?>
        <?=$this->Html->script('common-scripts')?>
        <?=$this->Html->script('jquery.dcjqaccordion.2.7')?>
</body>
</html>
