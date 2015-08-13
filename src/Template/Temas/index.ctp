
<section id="content" class="table-layout animated fadeIn">
    <div class="tray tray-center">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-visible">
                    <div class="panel-heading">
                        <div class="panel-title hidden-xs">
                            <span class="glyphicon glyphicon-tasks"></span>Temas</div>
                    </div>
                    <div class="panel-body pn">
                        <table class="table table-striped table-hover tabla-dato" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($temas as $da): ?>
                                  <tr>
                                      <td><?= $da->nombre ?></td>
                                      <td><?= $da->descripcion ?></td>
                                      <td>
                                          <div class="btn-group">
                                              <a href="javascript:" onclick="cargarmodal('<?php echo $this->Url->build(['action' => 'edit', $da->id]); ?>');" type="button" title="Editar" class="btn btn-system">
                                                  <i class="fa fa-edit"></i>
                                              </a>
                                          </div>  
                                          <div class="btn-group">
                                              <?= $this->Html->link('<i class="fa fa-times"></i>', ['action' => 'delete', $da->id], ['class' => 'btn btn-danger', 'escape' => false, 'title' => 'Eliminar','confirm' => __('Estas seguro de eliminar # {0}?', $da->id)]) ?>
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

