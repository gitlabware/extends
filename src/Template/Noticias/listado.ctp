<!-- Datatables CSS -->
<link rel="stylesheet" type="text/css" href="<?= $this->request->webroot; ?>js/vendor/plugins/datatables/media/css/dataTables.bootstrap.css">
<!-- Datatables Addons CSS -->
<link rel="stylesheet" type="text/css" href="<?= $this->request->webroot; ?>js/vendor/plugins/datatables/media/css/dataTables.plugins.css">

<section id="content" class="table-layout animated fadeIn">

    <!-- begin: .tray-center -->
    <div class="tray tray-center pv40 ph30 va-t posr animated-delay animated-long" data-animate='["800","fadeIn"]'>                 
        <div class="tray tray-center">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-visible" id="spy1">
                        <div class="panel-heading">
                            <div class="panel-title hidden-xs">
                                <span class="glyphicon glyphicon-tasks"></span>Listado de Noticias</div>
                        </div>
                        <?php //debug($noticias->toArray()); ?>
                        <div class="panel-body pn">
                            <table class="table table-striped table-hover display" id="datatable5" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Fecha</th>
                                        <th>Cliente</th>
                                        <th>Medio</th>
                                        <th>Titulo</th>
                                        <th>Tendencia</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($noticias as $n): ?>
                                      <tr>
                                          <td><?= $n['fecha']; ?></td>
                                          <td><?= $n['cliente']['nombre']; ?></td>
                                          <td><?= $n['medio']['nombre']; ?></td>
                                          <td><?= $n['titulo']; ?></td>
                                          <td><?= $n['tendencia']; ?></td>
                                          <td>
                                              <div class="btn-group">
                                                  <a href="#<?// $this->url->build(['action'=>'edit', $n['id']]); ?>" type="button" class="btn btn-info">
                                                      <i class="fa fa-edit"></i>
                                                  </a>
                                              </div>                                              
                                          </td>
                                      </tr>
                                    <?php endforeach; ?>                      
                                </tbody>
                                <tfoot>
                                    <tr>
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
        </div>
    </div>
    <!-- end: .tray-center -->

    <!-- begin: .tray-right -->
    <aside class="tray tray-right tray290 va-t pn" data-tray-height="match">
        <div class="animated-delay p20 pb15" data-animate='["300","fadeIn"]'>
            <h4 class="mt5 mb20"> Extends - <span class="fs14 fw400 text-muted">Nueva Noticia</span></h4>

            <ul class="fs14 list-unstyled list-spacing-10 mb10 pl5">
                <li>
                    <i class="fa fa-exclamation-circle text-warning fa-lg pr10"></i>
                    <b> Autor:</b> Cristiam Herrera Daza 
                </li>
                <li>
                    <i class="fa fa-exclamation-circle text-warning fa-lg pr10"></i>
                    <b> License:</b> CC - Commercial 3.0
                </li>
                <li>
                    <i class="fa fa-exclamation-circle text-warning fa-lg pr10"></i>
                    <b> Info:</b>
                    <a href="http://www.themeforest.net/user/AdminDesigns"> www.extends.com.bo </a>
                </li>
            </ul>
        </div>


    </aside>
    <!-- end: .tray-right -->

</section>
<!-- End: Content -->
</div>


</div>
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

<!-- Select2 Plugin Plugin -->
<?php echo $this->Html->script('cambiaColorForm', ['block' => 'scriptjs']); ?>
<script type="text/javascript">
  jQuery(document).ready(function () {

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