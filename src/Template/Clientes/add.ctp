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
                        <?php echo $this->Form->create($cliente, ['id' => 'formNoticia']); ?>                        
                        <div class="section-divider mb40" id="spy1">
                            <span>Nuevo Cliente</span>
                        </div>
                        <!-- .section-divider -->                           

                        <!-- Input Icons -->
                        <div class="row">

                            <div class="col-md-8">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="text" name="nombre" class="validate[required] form-control" placeholder="Nombre">
                                        <label for="firstname" class="field-icon"><i class="fa fa-file"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="text" name="telefono" class="validate[required] form-control" placeholder="Telefono">
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
                                        <input type="text" name="descripcion" class="validate[required] form-control" placeholder="Descripcion">
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
                                        <input type="text" name="direccion" class="validate[required] form-control" placeholder="Direccion">
                                        <label for="firstname" class="field-icon"><i class="fa fa-file"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-4">

                                <?php $cdd = ['La Paz' => 'La Paz', 'Cochabamba' => 'Cochabamba', 'Santa Cruz' => 'Santa Cruz', 'Pando' => 'Pando', 'Beni' => 'Beni', 'Oruro' => 'Oruro', 'Potosi' => 'Potosi', 'Tarija' => 'Tarija']; ?>
                                <?php echo $this->Form->select('ciudad', $cdd, ['class' => 'form-control']); ?>                        

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-12">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="text" name="web" class="validate[required] form-control" placeholder="Pagina Web">
                                        <label for="firstname" class="field-icon"><i class="fa fa-file"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>                   

                        </div>

                        <div class="section-divider mb40" id="spy1">
                            <span>Contactos</span>
                        </div>                        

                        <div id="clonedInput1" class="clonedInput">
                            <div class="row">

                                <div class="col-md-8">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="nombre_contacto[]" id="nombre_contacto" class="validate[required] form-control" placeholder="Nombre Contacto">                                            
                                            <label for="firstname" class="field-icon"><i class="fa fa-file"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="cargo_contacto[]" id="cargo_contacto" class="validate[required] form-control" placeholder="Cargo">
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
                                            <input type="text" name="email_contacto[]" id="email_contacto" class="validate[required] form-control" placeholder="Email">
                                            <label for="firstname" class="field-icon"><i class="fa fa-file"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="celular_contacto[]" id="celular_contacto" class="validate[required] form-control" placeholder="Celular">
                                            <label for="firstname" class="field-icon"><i class="fa fa-file"></i>
                                            </label>
                                        </label>
                                    </div>  
                                </div>

                            </div>
                            <div class="actions">                                
                                <button type="button" class="clone btn btn-success btn-gradient dark">Adicionar Contacto</button>
                                <button type="button" class="remove btn btn-danger btn-gradient dark">Quitar Contacto</button>
                            </div>
                            <p>&nbsp;</p>
                        </div>
                        <div id="clonaForm">
                            
                        </div>
                        <div class="panel-footer text-right">
                            <button type="submit" class="button btn-primary"> Guardar Noticia</button>
                        </div>
                        </form>                                                

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- Select2 Plugin Plugin -->
<?php echo $this->Html->script('cambiaColorForm', ['block' => 'scriptjs']); ?>
<script>
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
      console.log(cloneIndex);
      console.log($(this).parents(".clonedInput"));
  }
  function remove() {
      $(this).parents(".clonedInput").remove();
  }
  $("button.clone").on("click", clone);

  $("button.remove").on("click", remove);
</script>