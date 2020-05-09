<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Trailer $trailer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $trailer->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $trailer->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Trailers'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="trailers form large-9 medium-8 columns content">
    <?= $this->Form->create($trailer) ?>
    <fieldset>
        <legend><?= __('Edit Trailer') ?></legend>
        <?php
            echo $this->Form->control('trailer_number');
            echo $this->Form->control('driver_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
