<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LocationType $locationType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Location Type'), ['action' => 'edit', $locationType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Location Type'), ['action' => 'delete', $locationType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $locationType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Location Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Location Type'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="locationTypes view large-9 medium-8 columns content">
    <h3><?= h($locationType->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($locationType->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($locationType->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($locationType->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($locationType->modified) ?></td>
        </tr>
    </table>
</div>
