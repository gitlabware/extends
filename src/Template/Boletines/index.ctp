
<section id="content" class="table-layout animated fadeIn">
    <div class="tray tray-center">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-visible">
                    <div class="panel-heading">
                        <div class="panel-title hidden-xs">
                            <span class="glyphicon glyphicon-tasks"></span>Boletines</div>
                    </div>
                    <div class="panel-body pn">
                        <table class="table table-striped table-hover tabla-dato" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Numero</th>
                                    <th>Cliente</th>
                                    <th>Fecha</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($boletines as $da): ?>
                                  <tr>
                                      <td><?= $da->numero?></td>
                                      <td><?= $da->cliente->nombre ?></td>
                                      <td><?= $da->created ?></td>
                                      <td>
                                          <div class="btn-group">
                                              <a href="<?php echo $this->Url->build(['action' => 'listado', $da->numero]); ?>" type="button" title="Ver" class="btn btn-system">
                                                  <i class="fa fa-eye"></i>
                                              </a>
                                          </div>  
                                          <div class="btn-group">
                                              <?= $this->Html->link('<i class="fa fa-times"></i>', ['action' => 'eliminar', $da->numero], ['class' => 'btn btn-danger', 'escape' => false, 'title' => 'Eliminar','confirm' => __('Estas seguro de eliminar # {0}?', $da->numero)]) ?>
                                          </div> 
                                      </td>
                                  </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

