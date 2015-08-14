<link rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot; ?>css/admin-forms.css">
<link rel="stylesheet" type="text/css" href="<?= $this->request->webroot; ?>js/vendor/plugins/daterange/daterangepicker.css">
<link rel="stylesheet" type="text/css" href="<?= $this->request->webroot; ?>js/vendor/plugins/datepicker/css/bootstrap-datetimepicker.css">
<link rel="stylesheet" type="text/css" href="<?= $this->request->webroot; ?>js/vendor/plugins/select2/css/core.css">
<!-- Datatables CSS -->
<link rel="stylesheet" type="text/css" href="<?= $this->request->webroot; ?>js/vendor/plugins/datatables/media/css/dataTables.bootstrap.css">
<!-- Datatables Addons CSS -->
<link rel="stylesheet" type="text/css" href="<?= $this->request->webroot; ?>js/vendor/plugins/datatables/media/css/dataTables.plugins.css">

<section id="content" class="table-layout animated fadeIn">

    <!-- begin: .tray-center -->
    <div class="tray tray-center pv40 ph30 va-t posr animated-delay animated-long" data-animate='["800","fadeIn"]'>                 
        <div class="tray tray-center">

            <div class="panel-group accordion" id="accordion">
                <div class="panel">
                    <div class="panel-heading">
                        <a class="accordion-toggle accordion-icon link-unstyled collapsed" data-toggle="collapse" data-parent="#accordion" href="#accord1" aria-expanded="false">
                            Buscador de
                            <span class="text-info">Noticias</span>
                        </a>
                    </div>
                    <div id="accord1" class="panel-collapse collapse" style="height: 0px;" aria-expanded="false">
                        <div class="panel-body">
                            <div class="admin-form">

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="section">
                                            <label class="field prepend-icon">
                                                <input type="text" name="fecha" class="validate[required] form-control" id="datetimepicker1" placeholder="Fecha Inicio">
                                                <label for="firstname" class="field-icon"><i class="fa fa-calendar"></i>
                                                </label>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="section">
                                            <label class="field prepend-icon">
                                                <input type="text" name="fecha" class="validate[required] form-control" id="datetimepicker2" placeholder="Fecha Inicio">
                                                <label for="firstname" class="field-icon"><i class="fa fa-calendar"></i>
                                                </label>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <select name="data[0][medio_id]" class="form-control">
                                            <option value="0">Buscar por</option>                                            
                                            <option value="Publicacion">Publicacion</option> 
                                            <option value="Publicacion">Ingreso</option>
                                        </select>  
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <select name="data[0][medio_id]" class="form-control">
                                            <option value="0">Seleccione Cliente</option>
                                            <?php foreach ($dcc as $d): ?>
                                              <option value="<?php echo $d['id']; ?>"><?php echo $d['nombre']; ?></option>                                                                                        
                                            <?php endforeach; ?>
                                        </select> 
                                    </div>
                                    <div class="col-md-4">
                                        <select name="data[0][medio_id]" class="form-control">
                                            <option value="0">Buscar por</option>                                            
                                            <option value="Impreso">Impreso</option> 
                                            <option value="Digital">Digital</option>
                                            <option value="Digital">Radio</option>
                                            <option value="Digital">Tv</option>
                                            <option value="Digital">Fuente</option>                                            
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <select name="data[0][medio_id]" class="form-control">
                                            <option value="0">Seleccione Medio</option>
                                            <?php foreach ($dcm as $d): ?>
                                              <option value="<?php echo $d['id']; ?>"><?php echo $d['nombre']; ?> (<?php echo $d['ciudad']; ?>)</option>                                                                                        
                                            <?php endforeach; ?>
                                        </select>   
                                    </div>
                                </div>
                                <p>&nbsp;</p>
                                <div class="row">

                                    <div class="col-md-8">
                                        <div class="section">
                                            <label class="field prepend-icon">
                                                <input type="text" name="fecha" class="validate[required] form-control" placeholder="Titulo">
                                                <label for="firstname" class="field-icon"><i class="fa fa-file"></i>
                                                </label>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <select name="data[0][medio_id]" class="form-control">
                                            <option value="0">Tendencia</option>                                            
                                            <option value="Positivo">Positivo</option> 
                                            <option value="Negativo">Negativo</option>
                                            <option value="Neutro">Neutro</option>
                                        </select>  
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="section">
                                            <label class="field prepend-icon">
                                                <input type="text" name="fecha" class="form-control" placeholder="Fuente">
                                                <label for="firstname" class="field-icon"><i class="fa fa-file"></i>
                                                </label>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="section">
                                            <label class="field prepend-icon">
                                                <input type="text" name="fecha" class="form-control" placeholder="Programa">
                                                <label for="firstname" class="field-icon"><i class="fa fa-file"></i>
                                                </label>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="section">
                                            <label class="field prepend-icon">
                                                <input type="text" name="fecha" class="form-control" placeholder="Genero">
                                                <label for="firstname" class="field-icon"><i class="fa fa-file"></i>
                                                </label>
                                            </label>
                                        </div>
                                    </div>

                                </div>  

                                <div class="row">

                                    <div class="col-md-8">
                                        <div class="section">
                                            <label class="field prepend-icon">
                                                <input type="text" name="fecha" class="form-control" placeholder="Palabras Clave">
                                                <label for="firstname" class="field-icon"><i class="fa fa-file"></i>
                                                </label>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <select name="data[0][medio_id]" class="form-control">
                                            <option value="0">Ordenar por:</option>                                            
                                            <option value="1">Desde el más antiguo</option> 
                                            <option value="2">Desde el Mas nuevo</option>
                                            <option value="3">Por Medio</option>
                                            <option value="3">Por Tendencia</option>
                                            <option value="3">Por Cliente</option>
                                            <option value="3">Por nota de Prensa</option>
                                            <option value="3">Por clasificacion</option>
                                        </select> 
                                    </div>                                                                        

                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-lg btn-info btn-block">Buscar Noticias</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-visible" id="spy1">
                        <div class="panel-heading">
                            <div class="panel-title hidden-xs">
                                <span class="glyphicon glyphicon-tasks"></span>Listado de Noticias</div>
                        </div>

                        <?php //debug($noticias->toArray()); ?>
                        <div class="panel-body pn">
                            <table class="table tc-checkbox-1 admin-form theme-warning br-t" id="datatable5" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Fecha</th>
                                        <th>Cliente</th>
                                        <th>Medio</th>
                                        <th>Titulo</th>
                                        <th>Tendencia</th>
                                        <th style="width: 120px;">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($noticias as $n): ?>
                                      <tr>
                                          <td class="hidden-xs">
                                              <label class="option block mn">
                                                  <input type="checkbox" name="idnoticia-<?= $n['id']; ?>" value="FR">
                                                  <span class="checkbox mn"></span>
                                              </label>
                                          </td>
                                          <td><?= $n['fecha']; ?></td>
                                          <td><?= $n['cliente']['nombre']; ?></td>
                                          <td><?= $n['medio']['nombre']; ?></td>
                                          <td><?= $n['titulo']; ?></td>
                                          <td><?= $n['tendencia']; ?></td>
                                          <td>
                                              <div class="btn-group">
                                                  <a href="<?php echo $this->Url->build(['action' => 'edit', $n['id']]); ?>" type="button" class="btn btn-info">
                                                      <i class="fa fa-edit"></i>
                                                  </a>
                                              </div>  
                                              <div class="btn-group">
                                                  <a href="#<? // $this->url->build(['action'=>'edit', $n['id']]);          ?>" type="button" class="btn btn-success">
                                                      <i class="fa fa-eye"></i>
                                                  </a>
                                              </div>   
                                              <div class="btn-group">
                                                  <?= $this->Html->link('<i class="fa fa-times"></i>', ['action' => 'delete', $n['id']], ['class' => 'btn btn-danger', 'escape' => false, 'confirm' => __('Estas seguro de eliminar # {0}?', $n['id'])]) ?>
                                              </div>                                                 
                                          </td>
                                      </tr>
                                    <?php endforeach; ?>                      
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th></th>
                                        <th>Fecha</th>
                                        <th>Cliente</th>
                                        <th>Medio</th>
                                        <th>Titulo</th>
                                        <th>Tendencia</th>
                                        <th>Acciones</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <?= $this->Form->create(NULL, ['url' => ['controller' => 'Boletines','action' => 'genera_boletin'],'id' => 'formboletin']) ?>
            <div class="row">
                <div class="col-md-4">
                    <div class="section">
                        <?php echo $this->Form->select('cliente_id', $l_clientes, ['class' => 'form-control', 'empty' => 'Seleccione al cliente','required']); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="section">
                        <button class="btn active btn-info btn-block">GENERAR BOLETIN</button>
                    </div>
                </div>
            </div>
            <?= $this->Form->end() ?>

        </div>
    </div>
    <!-- end: .tray-center -->

</section>
<!-- End: Content -->

</aside>
<!-- end: .tray-right -->

</section>
<!-- End: Content -->

<!-- Datatables -->
<script src="<?php echo $this->request->webroot; ?>js/vendor/plugins/datatables/media/js/jquery.dataTables.js"></script>

<!-- Datatables Tabletools addon -->
<script src="<?php echo $this->request->webroot; ?>js/vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>

<!-- Datatables ColReorder addon -->
<script src="<?php echo $this->request->webroot; ?>js/vendor/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>

<!-- Datatables Bootstrap Modifications  -->
<script src="<?php echo $this->request->webroot; ?>js/vendor/plugins/datatables/media/js/dataTables.bootstrap.js"></script>

<script src="<?= $this->request->webroot; ?>js/vendor/plugins/moment/moment.min.js"></script>
<script src="<?= $this->request->webroot; ?>js/vendor/plugins/daterange/daterangepicker.js"></script>
<script src="<?= $this->request->webroot; ?>js/vendor/plugins/datepicker/js/bootstrap-datetimepicker.js"></script>

<!-- Select2 Plugin Plugin -->
<?php echo $this->Html->script('cambiaColorForm', ['block' => 'scriptjs']); ?>
<script type="text/javascript">
  $('#formboletin').submit(function(e){
    $('#datatable5 > tbody > tr input[type=checkbox]').each(function(i,val){
      if($(val).prop('checked')){
        //alert(val.name.substring(10));
        $('#formboletin').append('<input type="hidden" name="noticias['+i+']" value="'+val.name.substring(10)+'">');
      }
    });
    //e.preventDefault();
  });
  
  
  
  jQuery(document).ready(function () {

      $('#datetimepicker1, #datetimepicker2').datetimepicker({
          pickTime: false,
          format: 'YYYY-MM-DD'
      });

      // Multi-Column Filtering
      $('#datatable5 thead th').each(function () {
          var title = $('#datatable5 tfoot th').eq($(this).index()).text();
          $(this).html('<input type="text" class="form-control" placeholder=" ' + title + '" />');
      });

      // DataTable
      var table5 = $('#datatable5').DataTable({
          "sDom": 't<"dt-panelfooter clearfix"ip>',
          "language": {
              "url": "<?php echo $this->request->webroot; ?>js/vendor/plugins/datatables/media/js/Spanish.json"
          },
          "ordering": false
      });

      // Apply the search
      table5.columns().eq(0).each(function (colIdx) {
          $('input', table5.column(colIdx).header()).on('keyup change', function () {
              table5
                      .column(colIdx)
                      .search(this.value)
                      .draw();
          });
      });

  });
</script>    