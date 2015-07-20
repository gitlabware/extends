<div id="modal-form" class=" popup-basic admin-form mfp-with-anim mfp-hide">
    <div class="panel">
        <div class="panel-heading">
            <span class="panel-title">
                <i class="fa fa-rocket"></i>Nuevo Medio <b><?php echo $tipomedio; ?></b></span>
        </div>
        <!-- end .panel-heading section -->

        <!--<form method="post" action="/" id="comment">-->
        <?php echo $this->Form->create($medio, ['id' => 'formMedio']); ?>
        <div class="panel-body p25">
            <div class="section row">                    

                <div class="col-md-6">
                    <label for="lastname" class="field prepend-icon">
                        <input type="text" name="nombre" id="lastname" class="gui-input" placeholder="Nombre" autofocus>
                        <label for="lastname" class="field-icon">
                            <i class="glyphicons glyphicons-notes"></i>
                        </label>
                    </label>
                </div>
                <!-- end section -->

                <div class="col-md-6">
                    <label for="firstname" class="field prepend-icon"> 
                        <?php //debug($medio);?>
                        <input type="text" id="disabledInput" name="vtipo" id="firstname" class="form-control" value="<?= $tipomedio; ?>" disabled="">
                        <?php echo $this->Form->hidden('tipo', ['value' => "$tipomedio"]); ?>                        
                        <label for="firstname" class="field-icon">
                            <i class="fa fa-user"></i>
                        </label>
                    </label>
                </div>
                <!-- end section -->

            </div>
            <!-- end section row section -->

            <div class="section row">
                <div class="col-md-6">
                    <?php //debug($cdd); ?>
                    <?php echo $this->Form->select('ciudad', $cdd, ['class' => 'form-control']); ?>                        
                </div>
                <!-- end section -->

                <div class="col-md-6">
                    <label for="website" class="field prepend-icon">
                        <input type="text" name="url" id="lastname" class="gui-input" placeholder="Web">
                        <label for="website" class="field-icon">
                            <i class="fa fa-globe"></i>
                        </label>
                    </label>
                </div>
                <!-- end section -->

            </div>
            <!-- end section row section -->

            <div class="section">
                <label for="comment" class="field prepend-icon">
                    <textarea class="gui-textarea" id="comment" name="descripcion" placeholder="Descripcion"></textarea>
                    <label for="comment" class="field-icon">
                        <i class="fa fa-comments"></i>
                    </label>                        
                </label>
            </div>
            <!-- end section -->

        </div>
        <!-- end .form-body section -->

        <div class="panel-footer">
            <button type="submit" class="button btn-primary">Guardar Medio</button>
            <button type="submit" class="button btn-dark" onclick="cerrarModal()">Cerrar</button>
        </div>
        <!-- end .form-footer section -->
        </form>
    </div>
    <!-- end: .panel -->
</div>
<script>
  function cerrarModal(){
    $("#modal-principal").modal('hide');  
  }
  
  $("#formMedio").submit(function (e)
  {
      var postData = $(this).serializeArray();
      var formURL = $(this).attr("action");
      $.ajax(
              {
                  url: formURL,
                  type: "POST",
                  data: postData,
                  /*beforeSend:function (XMLHttpRequest) {
                   alert("antes de enviar");
                   },*/
                  complete: function (XMLHttpRequest, textStatus) {
                      //alert('despues de enviar');
                      $("#modal-principal").modal('hide');  
                      $('#modal-principal').on('hidden.bs.modal', function () {
                          //console.log('El modal se cerro');                          
                          $("#<?= $div; ?>").load("<?php echo $this->url->build(['action'=>'ajaxactselect', $tipomedio]); ?>");
                      });

                      
                  },
                  success: function (data, textStatus, jqXHR)
                  {
                      //data: return data from server
                      //$("#parte").html(data);
                      //console.log('formulario enviado');
                      //$('#formMedio').modal('hide');  

                  },
                  error: function (jqXHR, textStatus, errorThrown)
                  {
                      //if fails   
                      alert("error");
                  }
              });
      e.preventDefault(); //STOP default action
      //e.unbind(); //unbind. to stop multiple form submit.
  });
</script>