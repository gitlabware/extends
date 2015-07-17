<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Tema'), ['action' => 'edit', $tema->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tema'), ['action' => 'delete', $tema->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tema->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Temas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tema'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Noticias'), ['controller' => 'Noticias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Noticia'), ['controller' => 'Noticias', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="temas view large-10 medium-9 columns">
    <h2><?= h($tema->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Nombre') ?></h6>
            <p><?= h($tema->nombre) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($tema->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($tema->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($tema->modified) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Descripcion') ?></h6>
            <?= $this->Text->autoParagraph(h($tema->descripcion)) ?>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Noticias') ?></h4>
    <?php if (!empty($tema->noticias)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Tema Id') ?></th>
            <th><?= __('Tipo Id') ?></th>
            <th><?= __('Medio Id') ?></th>
            <th><?= __('Fecha') ?></th>
            <th><?= __('Notaprensa') ?></th>
            <th><?= __('Codigo') ?></th>
            <th><?= __('Clasificacion') ?></th>
            <th><?= __('Seccion') ?></th>
            <th><?= __('Pagina') ?></th>
            <th><?= __('Titulo') ?></th>
            <th><?= __('Genero') ?></th>
            <th><?= __('Web') ?></th>
            <th><?= __('Fuente') ?></th>
            <th><?= __('Alias') ?></th>
            <th><?= __('Riesgo') ?></th>
            <th><?= __('Formato') ?></th>
            <th><?= __('Nombrearchivo') ?></th>
            <th><?= __('Descripcion') ?></th>
            <th><?= __('Tendencia') ?></th>
            <th><?= __('Longitud') ?></th>
            <th><?= __('Costo') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($tema->noticias as $noticias): ?>
        <tr>
            <td><?= h($noticias->id) ?></td>
            <td><?= h($noticias->tema_id) ?></td>
            <td><?= h($noticias->tipo_id) ?></td>
            <td><?= h($noticias->medio_id) ?></td>
            <td><?= h($noticias->fecha) ?></td>
            <td><?= h($noticias->notaprensa) ?></td>
            <td><?= h($noticias->codigo) ?></td>
            <td><?= h($noticias->clasificacion) ?></td>
            <td><?= h($noticias->seccion) ?></td>
            <td><?= h($noticias->pagina) ?></td>
            <td><?= h($noticias->titulo) ?></td>
            <td><?= h($noticias->genero) ?></td>
            <td><?= h($noticias->web) ?></td>
            <td><?= h($noticias->fuente) ?></td>
            <td><?= h($noticias->alias) ?></td>
            <td><?= h($noticias->riesgo) ?></td>
            <td><?= h($noticias->formato) ?></td>
            <td><?= h($noticias->nombrearchivo) ?></td>
            <td><?= h($noticias->descripcion) ?></td>
            <td><?= h($noticias->tendencia) ?></td>
            <td><?= h($noticias->longitud) ?></td>
            <td><?= h($noticias->costo) ?></td>
            <td><?= h($noticias->created) ?></td>
            <td><?= h($noticias->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Noticias', 'action' => 'view', $noticias->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Noticias', 'action' => 'edit', $noticias->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Noticias', 'action' => 'delete', $noticias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $noticias->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
