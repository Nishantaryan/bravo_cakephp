<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bay[]|\Cake\Collection\CollectionInterface $bays
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bay'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Trailers'), ['controller' => 'Trailers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Trailer'), ['controller' => 'Trailers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Locations'), ['controller' => 'Locations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Location'), ['controller' => 'Locations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bays index large-9 medium-8 columns content">
    <h3><?= __('Bays') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('trailer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('location_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bays as $bay): ?>
            <tr>
                <td><?= $this->Number->format($bay->id) ?></td>
                <td><?= $bay->has('trailer') ? $this->Html->link($bay->trailer->id, ['controller' => 'Trailers', 'action' => 'view', $bay->trailer->id]) : '' ?></td>
                <td><?= $bay->has('location') ? $this->Html->link($bay->location->id, ['controller' => 'Locations', 'action' => 'view', $bay->location->id]) : '' ?></td>
                <td><?= h($bay->created) ?></td>
                <td><?= h($bay->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $bay->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bay->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bay->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bay->id)]) ?>
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
