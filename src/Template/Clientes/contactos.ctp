

<section id="content" class="table-layout animated fadeIn">
    <div class="tray tray-center">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-visible">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <a class="panel-controls pull-right" href="javascript:" title="Nuevo contacto" onclick="cargarmodal('<?= $this->Url->build(['action' => 'contacto',$cliente->id]); ?>');">
                                <i class="fa fa-plus"></i>
                            </a>
                            <span class="glyphicon glyphicon-tasks"></span>Contactos de cliente (<?= $cliente->nombre ?>)
                            
                        </div>

                    </div>
                    <div class="panel-body pn">
                        <table class="table table-striped table-hover tabla-dato"  cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Cargo</th>
                                    <th>Celular</th>
                                    <th>Email</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($l_contactos as $con): ?>
                                  <tr>
                                      <td><?= $con->nombre ?></td>
                                      <td><?= $con->cargo ?></td>
                                      <td><?= $con->celular ?></td>
                                      <td><?= $con->email ?></td>
                                      <td>
                                          <div class="btn-group">
                                              <a href="javascript:" onclick="cargarmodal('<?php echo $this->Url->build(['action' => 'contacto', $cliente->id, $con->id]); ?>');" type="button" title="Editar" class="btn btn-system">
                                                  <i class="fa fa-edit"></i>
                                              </a>
                                          </div>
                                          <div class="btn-group">
                                              <?= $this->Html->link('<i class="fa fa-times"></i>', ['action' => 'delete_contacto', $con->id], ['class' => 'btn btn-danger', 'escape' => false, 'title' => 'Eliminar', 'confirm' => __('Estas seguro de eliminar # {0}?', $con->id)]) ?>
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

