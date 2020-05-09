<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Trailer[]|\Cake\Collection\CollectionInterface $trailers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Trailer'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="trailers index large-9 medium-8 columns content">
    <h3><?= __('Trailers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('trailer_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('driver_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($trailers as $trailer): ?>
            <tr>
                <td><?= $this->Number->format($trailer->id) ?></td>
                <td><?= $this->Number->format($trailer->trailer_number) ?></td>
                <td><?= $this->Number->format($trailer->driver_id) ?></td>
                <td><?= h($trailer->created) ?></td>
                <td><?= h($trailer->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $trailer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $trailer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $trailer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trailer->id)]) ?>
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
