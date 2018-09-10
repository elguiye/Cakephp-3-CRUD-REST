<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Beneficioslist $beneficioslist
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $beneficioslist->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $beneficioslist->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Beneficioslist'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="beneficioslist form large-9 medium-8 columns content">
    <?= $this->Form->create($beneficioslist) ?>
    <fieldset>
        <legend><?= __('Editar Beneficio') ?></legend>
        <?php echo $this->element('beneficios/form'); ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
