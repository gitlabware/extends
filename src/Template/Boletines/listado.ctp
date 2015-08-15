
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
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default light">
                                                    <i class="fa fa-send"></i>
                                                    Enviar
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-9 text-right">
                                            <div class="btn-group mr10">
                                                <button type="button" class="btn btn-default light hidden-xs">
                                                    <i class="fa fa-eye"></i> 
                                                    Vista Previa
                                                </button>
                                                <button type="button" class="btn btn-default light">
                                                    <i class="fa fa-trash"></i> 
                                                    Eliminar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-4">

                                    </div>
                                    <div class="col-md-8">
                                        
                                    </div>
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
                                                      <?= $this->Html->link('<i class="fa fa-times"></i>', ['action' => 'delete', $da->id], ['class' => 'btn btn-danger', 'escape' => false, 'title' => 'Eliminar', 'confirm' => __('Estas seguro de eliminar # {0}?', $da->id)]) ?>
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
                                <table class="table tc-checkbox-1 admin-form theme-warning br-t" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Nombre</th>
                                            <th>E-mail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($l_contactos as $da): ?>
                                          <tr>
                                              <td class="hidden-xs">
                                                  <label class="option block mn">
                                                      <input type="checkbox" name="idnoticia-<?= $da->id; ?>" value="FR">
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

