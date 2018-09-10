<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Beneficioslist $beneficioslist
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Beneficioslist'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="beneficioslist form large-9 medium-8 columns content">
    <?= $this->Form->create($beneficioslist, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Agregar Beneficio') ?></legend>
        <?php echo $this->element('beneficios/form'); ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
