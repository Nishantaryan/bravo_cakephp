<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersCocktail $usersCocktail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users Cocktails'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cocktails'), ['controller' => 'Cocktails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cocktail'), ['controller' => 'Cocktails', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usersCocktails form large-9 medium-8 columns content">
    <?= $this->Form->create($usersCocktail) ?>
    <fieldset>
        <legend><?= __('Add Users Cocktail') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('cocktail_id', ['options' => $cocktails]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
