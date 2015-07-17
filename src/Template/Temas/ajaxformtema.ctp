<div id="modal-form" class=" popup-basic admin-form mfp-with-anim mfp-hide">
    <div class="panel">
        <div class="panel-heading">
            <span class="panel-title">
                <i class="fa fa-rocket"></i>Nuevo Tema</span>
        </div>
        <!-- end .panel-heading section -->

        <!--<form method="post" action="/" id="comment">-->
        <?php echo $this->Form->create($tema, ['id' => 'formTema']); ?>
        <div class="panel-body p25">
            <div class="section row">                    

                <div class="col-md-12">
                    <label for="lastname" class="field prepend-icon">
                        <input type="text" name="nombre" id="lastname" class="gui-input" placeholder="Nombre" autofocus>
                        <label for="lastname" class="field-icon">
                            <i class="glyphicons glyphicons-notes"></i>
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
            <button type="submit" class="button btn-primary">Guardar Tema</button>
            <button type="submit" class="button btn-dark" onclick="cerrarModal()">Cerrar</button>
        </div>
        <!-- end .form-footer section -->
        </form>
    </div>
    <!-- end: .panel -->
</div>
<script>
  function cerrarModal() {
      $("#modal-principal").modal('hide');
  }

  $("#formTema").submit(function (e)
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
                      $("#modal-principal").modal('hide');
                      $('#modal-principal').on('hidden.bs.modal', function () {
                          $("#divselimptema").load("<?php echo $this->url->build(['action'=>'ajaxactselect', 'Impreso']);  ?>");
                      });
                  },
                  success: function (data, textStatus, jqXHR)
                  {

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