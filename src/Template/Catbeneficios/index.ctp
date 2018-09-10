<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Catbeneficio[]|\Cake\Collection\CollectionInterface $catbeneficios
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Catbeneficio'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="catbeneficios index large-9 medium-8 columns content">
    <h3><?= __('Catbeneficios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($catbeneficios as $catbeneficio): ?>
            <tr>
                <td><?= $this->Number->format($catbeneficio->id) ?></td>
                <td><?= h($catbeneficio->descripcion) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $catbeneficio->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $catbeneficio->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $catbeneficio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $catbeneficio->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
