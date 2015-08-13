

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
                        <?php echo $this->Form->create($cliente, ['id' => 'formNoticia','class' => 'form-validacion']); ?>                        
                        <div class="section-divider mb40" id="spy1">
                            <span>Nuevo Cliente</span>
                        </div>
                        <!-- .section-divider -->                           

                        <!-- Input Icons -->
                        <div class="row">

                            <div class="col-md-8">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <?= $this->Form->text("nombre",['class' => 'form-control','placeholder' => 'Nombre','required'])?>
                                        <label for="firstname" class="field-icon"><i class="fa fa-file"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <?= $this->Form->text("telefono",['class' => 'form-control','placeholder' => 'Telefono','required'])?>
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
                                        <?= $this->Form->text("descripcion",['class' => 'form-control','placeholder' => 'Descripcion','required'])?>
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
                                        <?= $this->Form->text("direccion",['class' => 'form-control','placeholder' => 'Direccion','required'])?>
                                        <label for="firstname" class="field-icon"><i class="fa fa-file"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-4">

                                <?php $cdd = ['La Paz' => 'La Paz', 'Cochabamba' => 'Cochabamba', 'Santa Cruz' => 'Santa Cruz', 'Pando' => 'Pando', 'Beni' => 'Beni', 'Oruro' => 'Oruro', 'Potosi' => 'Potosi', 'Tarija' => 'Tarija']; ?>
                                <?php echo $this->Form->select('ciudad', $cdd, ['class' => 'form-control','required','empty' => 'Seleccion ciudad']); ?>                        

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-12">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <?= $this->Form->text("web",['class' => 'form-control','placeholder' => 'Pagina web','required'])?>
                                        <label for="firstname" class="field-icon"><i class="fa fa-file"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>                   
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
<!-- Select2 Plugin Plugin -->
<?php echo $this->Html->script(
  [
    'cambiaColorForm',
    'jquery.validate.min',
    'inivalidacionf'
  ]
  , ['block' => 'scriptjs']); ?>

