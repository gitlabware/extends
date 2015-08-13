
<div id="modal-form" class=" popup-basic admin-form mfp-with-anim mfp-hide">
    <div class="panel">
        <div class="panel-heading">
            <span class="panel-title">
                <i class="fa fa-rocket"></i>Registro de Medio</span>
        </div>
        <!-- end .panel-heading section -->

        <!--<form method="post" action="/" id="comment">-->
        <?php echo $this->Form->create($medio, ['id' => 'formCliente']); ?>
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
                    <?php $cdd = ['La Paz' => 'La Paz', 'Cochabamba' => 'Cochabamba', 'Santa Cruz' => 'Santa Cruz', 'Pando' => 'Pando', 'Beni' => 'Beni', 'Oruro' => 'Oruro', 'Potosi' => 'Potosi', 'Tarija' => 'Tarija']; ?>
                    <?php echo $this->Form->select('ciudad', $cdd, ['class' => 'form-control', 'required', 'empty' => 'Seleccione la ciudad']); ?>    

                </div>
                <!-- end section -->

            </div>
            <div class="section row">                    

                <div class="col-md-6">
                    <label for="lastname" class="field prepend-icon">
                        <?= $this->Form->text('url', ['class' => 'gui-input', 'placeholder' => 'Url', 'required']) ?>
                        <label for="lastname" class="field-icon">
                            <i class="fa fa-user"></i>
                        </label>
                    </label>
                </div>

                <div class="col-md-6">
                    <?php $tipo = ['Impreso' => 'Impreso', 'Digital' => 'Digital', 'Radio' => 'Radio', 'Tv' => 'Tv', 'Fuente' => 'Fuente']; ?>
                    <?php echo $this->Form->select('tipo', $tipo, ['class' => 'form-control', 'required', 'empty' => 'Seleccione el tipo']); ?>    
                </div>
                <!-- end section -->

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
                <!-- end section -->

            </div>


        </div>
        <!-- end .form-body section -->

        <div class="panel-footer">
            <button type="submit" class="button btn-primary">Guardar Medio</button>
            <!--<button type="submit" class="button btn-dark" onclick="cerrarModal()">Cerrar</button>-->
        </div>
        <!-- end .form-footer section -->
        </form>
    </div>
    <!-- end: .panel -->
</div>