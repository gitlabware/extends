<div id="modal-form" class=" popup-basic admin-form mfp-with-anim mfp-hide">
    <div class="panel">
        <div class="panel-heading">
            <span class="panel-title">
                <i class="fa fa-rocket"></i>Contacto de <?= $cliente->nombre ?></span>
        </div>
        <!-- end .panel-heading section -->

        <!--<form method="post" action="/" id="comment">-->
        <?php echo $this->Form->create($contacto, ['id' => 'formCliente']); ?>
        <?= $this->Form->hidden('cliente_id' ,['value' => $cliente->id]);?>
        <div class="panel-body p25">
            <div class="section row">                    

                <div class="col-md-6">
                    <label for="lastname" class="field prepend-icon">
                        <?= $this->Form->text('nombre', ['class' => 'gui-input', 'placeholder' => 'Nombre de Contacto', 'required']) ?>
                        <label for="lastname" class="field-icon">
                            <i class="fa fa-user"></i>
                        </label>
                    </label>
                </div>
                <!-- end section -->

                <div class="col-md-6">
                    <label for="firstname" class="field prepend-icon">
                        <?= $this->Form->text('cargo', ['class' => 'gui-input', 'placeholder' => 'Cargo', 'required']) ?>                  
                        <label for="firstname" class="field-icon">
                            <i class="fa fa-phone"></i>
                        </label>
                    </label>
                </div>
                <!-- end section -->

            </div>
            <div class="section row">                    

                <div class="col-md-6">
                    <label for="lastname" class="field prepend-icon">
                        <?= $this->Form->text('email', ['class' => 'gui-input', 'placeholder' => 'Email', 'required']) ?>
                        <label for="lastname" class="field-icon">
                            <i class="fa fa-user"></i>
                        </label>
                    </label>
                </div>
                <!-- end section -->

                <div class="col-md-6">
                    <label for="firstname" class="field prepend-icon">
                        <?= $this->Form->text('celular', ['class' => 'gui-input', 'placeholder' => 'Celular', 'required']) ?>                  
                        <label for="firstname" class="field-icon">
                            <i class="fa fa-phone"></i>
                        </label>
                    </label>
                </div>
                <!-- end section -->

            </div>


        </div>
        <!-- end .form-body section -->

        <div class="panel-footer">
            <button type="submit" class="button btn-primary">Guardar Contacto</button>
            <!--<button type="submit" class="button btn-dark" onclick="cerrarModal()">Cerrar</button>-->
        </div>
        <!-- end .form-footer section -->
        </form>
    </div>
    <!-- end: .panel -->
</div>