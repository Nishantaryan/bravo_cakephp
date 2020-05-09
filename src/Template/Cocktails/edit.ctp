<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cocktail $cocktail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cocktail->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cocktail->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cocktails'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cocktails form large-9 medium-8 columns content">
    <?= $this->Form->create($cocktail) ?>
    <fieldset>
        <legend><?= __('Edit Cocktail') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
            echo $this->Form->control('users._ids', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
