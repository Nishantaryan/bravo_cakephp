<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LocationType $locationType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $locationType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $locationType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Location Types'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="locationTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($locationType) ?>
    <fieldset>
        <legend><?= __('Edit Location Type') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
