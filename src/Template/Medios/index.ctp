<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Medio'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Noticias'), ['controller' => 'Noticias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Noticia'), ['controller' => 'Noticias', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="medios index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('nombre') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th><?= $this->Paginator->sort('ciudad') ?></th>
            <th><?= $this->Paginator->sort('url') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($medios as $medio): ?>
        <tr>
            <td><?= $this->Number->format($medio->id) ?></td>
            <td><?= h($medio->nombre) ?></td>
            <td><?= h($medio->created) ?></td>
            <td><?= h($medio->modified) ?></td>
            <td><?= h($medio->ciudad) ?></td>
            <td><?= h($medio->url) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $medio->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $medio->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $medio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medio->id)]) ?>
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
