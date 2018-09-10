<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Catbeneficio $catbeneficio
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Catbeneficio'), ['action' => 'edit', $catbeneficio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Catbeneficio'), ['action' => 'delete', $catbeneficio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $catbeneficio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Catbeneficios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Catbeneficio'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="catbeneficios view large-9 medium-8 columns content">
    <h3><?= h($catbeneficio->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($catbeneficio->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($catbeneficio->id) ?></td>
        </tr>
    </table>
</div>
