

<section id="content" class="table-layout animated fadeIn">
    <div class="tray tray-center">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-visible">
                    <div class="panel-heading">
                        <div class="panel-title hidden-xs">
                            <span class="glyphicon glyphicon-tasks"></span>Clientes</div>
                    </div>
                    <div class="panel-body pn">
                        <table class="table table-striped table-hover tabla-dato" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Telefono</th>
                                    <th>Descripcion</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($clientes as $cli): ?>
                                  <tr>
                                      <td><?= $cli->id ?></td>
                                      <td><?= $cli->nombre ?></td>
                                      <td><?= $cli->telefono ?></td>
                                      <td><?= $cli->descripcion ?></td>
                                      <td>
                                          <div class="btn-group">
                                              <a href="<?php echo $this->Url->build(['action' => 'edit', $cli->id]); ?>" type="button" title="Editar" class="btn btn-system">
                                                  <i class="fa fa-edit"></i>
                                              </a>
                                          </div>  
                                          <div class="btn-group">
                                              <a href="<?= $this->url->build(['action'=>'contactos', $cli->id]); ?>" type="button" title="Contactos" class="btn btn-primary">
                                                  <i class="fa fa-group"></i>
                                              </a>
                                          </div>   
                                          <div class="btn-group">
                                              <?= $this->Html->link('<i class="fa fa-times"></i>', ['action' => 'delete', $cli->id], ['class' => 'btn btn-danger', 'escape' => false, 'title' => 'Eliminar','confirm' => __('Estas seguro de eliminar # {0}?', $cli->id)]) ?>
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

