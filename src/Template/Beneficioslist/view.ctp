<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Beneficioslist $beneficioslist
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Beneficioslist'), ['action' => 'edit', $beneficioslist->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Beneficioslist'), ['action' => 'delete', $beneficioslist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $beneficioslist->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Beneficioslist'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Beneficioslist'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="beneficioslist view large-9 medium-8 columns content">
    <h3><?= h($beneficioslist->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Negocio') ?></th>
            <td><?= h($beneficioslist->negocio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descuento') ?></th>
            <td><?= h($beneficioslist->descuento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Logo') ?></th>
            <td><?= h($beneficioslist->logo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Logo Path') ?></th>
            <td><?= h($beneficioslist->logo_path) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($beneficioslist->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categoria') ?></th>
            <td><?= $this->Number->format($beneficioslist->categoria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($beneficioslist->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($beneficioslist->modified) ?></td>
        </tr>
    </table>
</div>
