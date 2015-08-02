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
                        <?php echo $this->Form->create($medio, ['id' => 'formNoticia']); ?>                        
                        <div class="section-divider mb40" id="spy1">
                            <span>Nuevo Medio</span>
                        </div>
                        <!-- .section-divider -->                           

                        <!-- Input Icons -->
                        <div class="row">

                            <div class="col-md-8">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="text" name="fecha" class="validate[required] form-control" placeholder="Nombre">
                                        <label for="firstname" class="field-icon"><i class="fa fa-file"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="text" name="fecha" class="validate[required] form-control" placeholder="Telefono">
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
                                        <input type="text" name="fecha" class="validate[required] form-control" placeholder="Descripcion">
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
                                        <input type="text" name="fecha" class="validate[required] form-control" placeholder="Direccion">
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
                                        <input type="text" name="fecha" class="validate[required] form-control" placeholder="Pagina Web">
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
                                        <input type="text" name="fecha" class="validate[required] form-control" placeholder="Nombre Contacto">
                                        <label for="firstname" class="field-icon"><i class="fa fa-file"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="text" name="fecha" class="validate[required] form-control" placeholder="Cargo">
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
                                        <input type="text" name="fecha" class="validate[required] form-control" placeholder="Email">
                                        <label for="firstname" class="field-icon"><i class="fa fa-file"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="text" name="fecha" class="validate[required] form-control" placeholder="Celular">
                                        <label for="firstname" class="field-icon"><i class="fa fa-file"></i>
                                        </label>
                                    </label>
                                </div>  
                            </div>

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
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
<!-- Select2 Plugin Plugin -->
<?php echo $this->Html->script('cambiaColorForm', ['block' => 'scriptjs']); ?>
<script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/utility/utility.js"></script>
<script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/main.js"></script>
<script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/demo.js"></script>