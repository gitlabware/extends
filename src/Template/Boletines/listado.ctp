
<section id="content" class="table-layout animated fadeIn">

    <div class="tray tray-center">

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-visible">
                    <div class="panel-heading">
                        <div class="panel-title hidden-xs">
                            <span class="glyphicon glyphicon-envelope"></span>
                            Boletin #<?= $cliente->numero ?> -<?= $cliente->cliente->nombre ?>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel-menu br-n">
                                    <div class="row">
                                        <div class="hidden-xs hidden-sm col-md-3">
                                            <?= $this->Form->create(NULL, ['id' => 'formenvia', 'action' => 'envia/' . $cliente->numero]) ?>
                                            <div class="btn-group">
                                                <button class="btn btn-default light" type="submit"> 
                                                    <i class="fa fa-send"></i>
                                                    Enviar
                                                </button>
                                            </div>
                                            <?= $this->Form->end() ?>
                                        </div>
                                        <div class="col-xs-12 col-md-9 text-right">
                                            <div class="btn-group mr10">
                                                <button type="button" class="btn btn-default light hidden-xs" onclick="$('#idnoticias').toggle(400);" title="Ver Noticias">
                                                    <i class="fa fa-eye"></i> 
                                                    Vista Previa
                                                </button>
                                                <?= $this->Html->link('<i class="fa fa-trash"></i> Eliminar' , ['action' => 'eliminar', $cliente->numero], ['class' => 'btn btn-default light', 'confirm' => 'Esta seguro de eliminar el boletin???', 'escape' => FALSE]) ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <style>
                                    .noticiass td{
                                        padding: 5px;
                                        border-top: 1px solid #3b3f4f;

                                        font-family: "Open Sans", Helvetica, Arial, sans-serif;
                                        font-size: 13px;
                                        font-weight: 400;
                                        line-height: 1.49;
                                        color: #666666;
                                    }
                                    .noticiass h4{
                                        color: #3b3f4f;
                                        font-size: 15px;
                                    }

                                </style>
                                <div id="idnoticias" style="display: none;">
                                    <?php foreach ($l_boletines as $da): ?>
                                      <table class="noticiass">
                                          <tr>
                                              <td style="width: 30%;" align="center">
                                                  <img src="<?php echo $this->request->webroot . 'img/'; ?>extend.jpg" alt="Smiley face" height="130" width="180">
                                              </td>
                                              <td>
                                                  <h4><?= $da->noticia->titulo ?> <small>::<?= $da->created ?></small></h4>
                                                  <p>
                                                      <?= $da->noticia->descripcion ?>
                                                  </p>
                                              </td>
                                          </tr>
                                      </table>
                                    <?php endforeach; ?>  
                                </div>
                                <h3 class="text-center text-primary">Noticias</h3>
                                <table class="table tc-checkbox-1 admin-form theme-warning br-t" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Noticia</th>
                                            <th>Fecha</th>
                                            <th>Accion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($l_boletines as $da): ?>
                                          <tr>
                                              <td><?= $da->noticia->titulo ?></td>
                                              <td><?= $da->created ?></td>
                                              <td>
                                                  <div class="btn-group">
                                                      <?= $this->Html->link('<i class="fa fa-times"></i>', ['action' => 'delete', $da->id], ['class' => 'btn btn-danger', 'escape' => false, 'title' => 'Quitar', 'confirm' => __('Estas seguro de Quitar # {0}?', $da->id)]) ?>
                                                  </div> 
                                              </td>
                                          </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="text-center text-primary">Contactos del cliente</h3>
                                <table class="table tc-checkbox-1 admin-form theme-warning br-t" cellspacing="0" width="100%" id="idcontactos">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Nombre</th>
                                            <th>E-mail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($l_contactos as $da): ?>
                                          <?php
                                          $check = '';
                                          if ($da->estado) {
                                            $check = 'checked';
                                          }
                                          ?>
                                          <tr>
                                              <td class="hidden-xs">
                                                  <label class="option block mn">
                                                      <input type="checkbox" name="idcontact-<?= $da->id; ?>" value="FR" <?= $check ?>>
                                                      <span class="checkbox mn"></span>
                                                  </label>
                                              </td>
                                              <td><?= $da->contacto->nombre ?></td>
                                              <td><?= $da->contacto->email ?></td>
                                          </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
  $('#formenvia').submit(function (e) {
      $('#idcontactos > tbody > tr input[type=checkbox]').each(function (i, val) {
          if ($(val).prop('checked')) {
              $('#formenvia').append('<input type="hidden" name="contactos[' + val.name.substring(10) + ']" value="1">');
          } else {
              $('#formenvia').append('<input type="hidden" name="contactos[' + val.name.substring(10) + ']" value="0">');
          }
      });
  });
</script>

