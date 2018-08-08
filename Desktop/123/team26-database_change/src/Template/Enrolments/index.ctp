<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Enrolment[]|\Cake\Collection\CollectionInterface $enrolments
 */
?>
<?php echo $this->Html->css('custom'); ?>
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
        <h1 class="page-header" >Enrolment List</h1>
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
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('course_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($enrolments as $enrolment): ?>
            <tr>
                <td><?= $this->Number->format($enrolment->id) ?></td>
                <td><?= $this->Number->format($enrolment->user_id) ?></td>
                <td><?= $enrolment->has('course') ? $this->Html->link($enrolment->course->id, ['controller' => 'Courses', 'action' => 'view', $enrolment->course->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $enrolment->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $enrolment->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $enrolment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enrolment->id)]) ?>
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
</div>

</body>
