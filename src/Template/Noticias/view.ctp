<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Noticia'), ['action' => 'edit', $noticia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Noticia'), ['action' => 'delete', $noticia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $noticia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Noticias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Noticia'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="noticias view large-10 medium-9 columns">
    <h2><?= h($noticia->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Nombre') ?></h6>
            <p><?= h($noticia->nombre) ?></p>
            <h6 class="subheader"><?= __('Clasificacion') ?></h6>
            <p><?= h($noticia->clasificacion) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($noticia->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Fecha') ?></h6>
            <p><?= h($noticia->fecha) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($noticia->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($noticia->modified) ?></p>
        </div>
    </div>
</div>
