<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Catbeneficio $catbeneficio
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $catbeneficio->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $catbeneficio->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Catbeneficios'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="catbeneficios form large-9 medium-8 columns content">
    <?= $this->Form->create($catbeneficio) ?>
    <fieldset>
        <legend><?= __('Edit Catbeneficio') ?></legend>
        <?php
            echo $this->Form->control('descripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
