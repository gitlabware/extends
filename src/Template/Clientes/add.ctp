<link rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot; ?>css/admin-forms.css">
<link rel="stylesheet" type="text/css" href="<?= $this->request->webroot; ?>js/vendor/plugins/daterange/daterangepicker.css">
<link rel="stylesheet" type="text/css" href="<?= $this->request->webroot; ?>js/vendor/plugins/datepicker/css/bootstrap-datetimepicker.css">
<link rel="stylesheet" type="text/css" href="<?= $this->request->webroot; ?>js/vendor/plugins/select2/css/core.css">
<section id="content" class="table-layout animated fadeIn">

    <!-- begin: .tray-center -->
    <div class="tray tray-center pv40 ph30 va-t posr animated-delay animated-long" data-animate='["800","fadeIn"]'>
        <div class="mw1100 center-block">           

            <!-- begin: .admin-form -->
            <div class="admin-form">

                <div id="p1" class="panel heading-border panel-primary">

                    <div class="panel-body bg-light">

                        <!--<form method="post" action="" id="form-ui">-->
                        <?php echo $this->Form->create($cliente, ['id' => 'formNoticia', 'class' => 'form-validacion']); ?>                        
                        <div class="section-divider mb40" id="spy1">
                            <span>Nuevo Cliente</span>
                        </div>
                        <!-- .section-divider -->                           

                        <!-- Input Icons -->
                        <div class="row">

                            <div class="col-md-8">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
                                        <label for="firstname" class="field-icon"><i class="fa fa-file"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="text" name="telefono" class="form-control" placeholder="Telefono" required>
                                        <label for="firstname" class="field-icon"><i class="fa fa-file"></i>
                                        </label>
                                    </label>
                                </div>  
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-12">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="text" name="descripcion" class="form-control" placeholder="Descripcion">
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
                                        <input type="text" name="direccion" class="form-control" placeholder="Direccion" required>
                                        <label for="firstname" class="field-icon"><i class="fa fa-file"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-4">

                                <?php $cdd = ['La Paz' => 'La Paz', 'Cochabamba' => 'Cochabamba', 'Santa Cruz' => 'Santa Cruz', 'Pando' => 'Pando', 'Beni' => 'Beni', 'Oruro' => 'Oruro', 'Potosi' => 'Potosi', 'Tarija' => 'Tarija']; ?>
                                <?php echo $this->Form->select('ciudad', $cdd, ['class' => 'form-control', 'required']); ?>                        

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-12">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="text" name="web" class="form-control" placeholder="Pagina Web" required>
                                        <label for="firstname" class="field-icon"><i class="fa fa-file"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>                   

                        </div>

                        <div class="section-divider mb40" id="spy1">
                            <span>Contactos</span>
                        </div>                        

                        <div class="row" id="btn-arch-0">
                            <div class="col-md-3">
                                <div class="section">
                                    <button class="btn btn-xs btn-system btn-block" type="button" onclick="add_cont();">Add Contacto</button>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="section">
                                    <button class="btn btn-xs btn-danger btn-block" type="button" onclick="quita_cont();">Quitar Contacto</button>
                                </div>
                            </div>
                        </div>

                        <div id="clonaForm">

                        </div>
                        <div class="panel-footer text-right">
                            <button type="submit" class="button btn-primary"> Guardar Cliente</button>
                        </div>
                        </form>                                                

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<div id="codigo_cop" style="display: none">

    <div id="clonedInput1">
        <div class="section-divider mb40">
            <span>Contacto</span>
        </div>  
        <div class="row">
            <div class="col-md-8">
                <div class="section">
                    <label class="field prepend-icon">
                        <input type="text" class="form-control" placeholder="Nombre Contacto" required>                                            
                        <label for="firstname" class="field-icon"><i class="fa fa-file"></i>
                        </label>
                    </label>
                </div>
            </div>

            <div class="col-md-4">
                <div class="section">
                    <label class="field prepend-icon">
                        <input type="text"  class="form-control" placeholder="Cargo" required>
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
                        <input type="text"  class="form-control" placeholder="Email" required>
                        <label for="firstname" class="field-icon"><i class="fa fa-file"></i>
                        </label>
                    </label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="section">
                    <label class="field prepend-icon">
                        <input type="text"  class="form-control" placeholder="Celular" required>
                        <label for="firstname" class="field-icon"><i class="fa fa-file"></i>
                        </label>
                    </label>
                </div>  
            </div>
        </div>
    </div>
</div>


<!-- Select2 Plugin Plugin -->
<?php
echo $this->Html->script(
  [
  'cambiaColorForm',
  'jquery.validate.min',
  'inivalidacionf'
  ]
  , ['block' => 'scriptjs']);
?>
<script>
  var contador = 0;
  function add_cont() {

      contador++;
      //$('#codigo_cop span').html('Contacto '+contador);
      $('#codigo_cop div:first').prop('id', 'dcontacto-' + contador);
      $('#codigo_cop input[type=text]').each(function (i, val) {
          $(val).prop('name', 'contactos[' + contador + '][campos][' + i + ']');
      });
      var html_arch = $('#codigo_cop').html();

      $('#btn-arch-0').after(html_arch);
  }

  function quita_cont() {
      if (contador > 0) {
          $('#dcontacto-' + contador).remove();
          contador--;
      }
  }


  /*
   var regex = /^(.*)(\d)+$/i;
   var cloneIndex = $(".clonedInput").length;
   
   function clone() {
   //console.log('entro');
   $(this).parents(".clonedInput").clone()
   .appendTo("#clonaForm")
   .attr("id", "clonedInput" + cloneIndex)
   .find("*")
   .each(function () {
   var id = this.id || "";
   var match = id.match(regex) || [];
   if (match.length == 3) {
   this.id = match[1] + (cloneIndex);
   }
   })
   .on('click', 'button.clone', clone)
   .on('click', 'button.remove', remove);
   
   cloneIndex++;
   //console.log(cloneIndex);
   //console.log($(this).parents(".clonedInput"));
   }
   function remove() {
   $(this).parents(".clonedInput").remove();
   }
   $("button.clone").on("click", clone);
   
   $("button.remove").on("click", remove);*/
</script>