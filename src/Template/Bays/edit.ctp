<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bay $bay
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bay->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bay->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Bays'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Trailers'), ['controller' => 'Trailers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Trailer'), ['controller' => 'Trailers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Locations'), ['controller' => 'Locations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Location'), ['controller' => 'Locations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bays form large-9 medium-8 columns content">
    <?= $this->Form->create($bay) ?>
    <fieldset>
        <legend><?= __('Edit Bay') ?></legend>
        <?php
            echo $this->Form->control('trailer_id', ['options' => $trailers]);
            echo $this->Form->control('location_id', ['options' => $locations]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
