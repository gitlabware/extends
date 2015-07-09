<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tema->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tema->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Temas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Noticias'), ['controller' => 'Noticias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Noticia'), ['controller' => 'Noticias', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="temas form large-10 medium-9 columns">
    <?= $this->Form->create($tema) ?>
    <fieldset>
        <legend><?= __('Edit Tema') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('descripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
