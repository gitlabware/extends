<div id="modal-form" class=" popup-basic admin-form mfp-with-anim mfp-hide">
    <div class="panel">
        <div class="panel-heading">
            <span class="panel-title">
                <i class="fa fa-rocket"></i>Registro de Tema</span>
        </div>
        <!-- end .panel-heading section -->
        <!--<form method="post" action="/" id="comment">-->
        <?php echo $this->Form->create($tema, ['id' => 'formCliente']); ?>
        <div class="panel-body p25">
            <div class="section row">                    
                <div class="col-md-12">
                    <label for="lastname" class="field prepend-icon">
                        <?= $this->Form->text('nombre', ['class' => 'gui-input', 'placeholder' => 'Nombre', 'required']) ?>
                        <label for="lastname" class="field-icon">
                            <i class="fa fa-user"></i>
                        </label>
                    </label>
                </div>
            </div>
            <div class="section row">                    
                <div class="col-md-12">
                    <label for="lastname" class="field prepend-icon">
                        <?= $this->Form->textarea('descripcion', ['class' => 'gui-textarea', 'placeholder' => 'Descripcion']) ?>
                        <label for="lastname" class="field-icon">
                            <i class="fa fa-user"></i>
                        </label>
                    </label>
                </div>
            </div>
        </div>
        <!-- end .form-body section -->
        <div class="panel-footer">
            <button type="submit" class="button btn-primary">Guardar Tema</button>
            <!--<button type="submit" class="button btn-dark" onclick="cerrarModal()">Cerrar</button>-->
        </div>
        <!-- end .form-footer section -->
        </form>
    </div>
    <!-- end: .panel -->
</div>
