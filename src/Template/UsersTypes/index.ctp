<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersType[]|\Cake\Collection\CollectionInterface $usersTypes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Users Type'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usersTypes index large-9 medium-8 columns content">
    <h3><?= __('Users Types') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usersTypes as $usersType): ?>
            <tr>
                <td><?= $this->Number->format($usersType->id) ?></td>
                <td><?= $usersType->has('user') ? $this->Html->link($usersType->user->id, ['controller' => 'Users', 'action' => 'view', $usersType->user->id]) : '' ?></td>
                <td><?= $usersType->has('type') ? $this->Html->link($usersType->type->name, ['controller' => 'Types', 'action' => 'view', $usersType->type->id]) : '' ?></td>
                <td><?= h($usersType->created) ?></td>
                <td><?= h($usersType->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $usersType->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usersType->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usersType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersType->id)]) ?>
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
