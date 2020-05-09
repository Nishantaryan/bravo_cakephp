<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bay $bay
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bay'), ['action' => 'edit', $bay->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bay'), ['action' => 'delete', $bay->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bay->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bays'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bay'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Trailers'), ['controller' => 'Trailers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Trailer'), ['controller' => 'Trailers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Locations'), ['controller' => 'Locations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Location'), ['controller' => 'Locations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bays view large-9 medium-8 columns content">
    <h3><?= h($bay->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Trailer') ?></th>
            <td><?= $bay->has('trailer') ? $this->Html->link($bay->trailer->id, ['controller' => 'Trailers', 'action' => 'view', $bay->trailer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location') ?></th>
            <td><?= $bay->has('location') ? $this->Html->link($bay->location->id, ['controller' => 'Locations', 'action' => 'view', $bay->location->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bay->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($bay->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($bay->modified) ?></td>
        </tr>
    </table>
</div>
