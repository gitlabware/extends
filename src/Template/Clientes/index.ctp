<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Cliente'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="clientes index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('nombre') ?></th>
            <th><?= $this->Paginator->sort('telefono') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($clientes as $cliente): ?>
        <tr>
            <td><?= $this->Number->format($cliente->id) ?></td>
            <td><?= h($cliente->nombre) ?></td>
            <td><?= h($cliente->telefono) ?></td>
            <td><?= h($cliente->created) ?></td>
            <td><?= h($cliente->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $cliente->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cliente->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
