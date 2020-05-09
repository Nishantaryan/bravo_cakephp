<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Trailer $trailer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Trailer'), ['action' => 'edit', $trailer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Trailer'), ['action' => 'delete', $trailer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trailer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Trailers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Trailer'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="trailers view large-9 medium-8 columns content">
    <h3><?= h($trailer->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($trailer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trailer Number') ?></th>
            <td><?= $this->Number->format($trailer->trailer_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Driver Id') ?></th>
            <td><?= $this->Number->format($trailer->driver_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($trailer->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($trailer->modified) ?></td>
        </tr>
    </table>
</div>
