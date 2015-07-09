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
                        <?php echo $this->Form->create($noticia); ?>
                        <div class="section-divider mb40" id="spy1">
                            <span>Nueva Noticia</span>
                        </div>
                        <!-- .section-divider -->                           

                        <!-- Input Icons -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="text" name="fecha" class="form-control" id="datetimepicker1">
                                        <label for="firstname" class="field-icon"><i class="fa fa-calendar"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <select name="cliente_id" class="form-control" name="ciudad_id">
                                    <option value="0">Seleccione Cliente</option>
                                    <option value="1">San Cristobal</option>
                                    <option value="2">Cerveceria Boliviana</option>
                                    <option value="3">Samsung</option>
                                </select>

                            </div>                                
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="text" name="notapresa" id="firstname" class="gui-input" placeholder="Nota de Prensa">
                                        <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="text" name="codigo" id="firstname" class="gui-input" placeholder="Codigo">
                                        <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="section mb15 border-right">                                    
                                <div class="option-group field">
                                    &nbsp;&nbsp;&nbsp;Clasificacion&nbsp;
                                    <label class="option">
                                        <input type="radio" name="clasificacion" value="A" checked>
                                        <span class="radio"></span>A</label>
                                    <label class="option">
                                        <input type="radio" name="clasificacion" value="B"> 
                                        <span class="radio"></span>B</label>
                                    <label class="option">
                                        <input type="radio" name="clasificacion" value="C">
                                        <span class="radio"></span>C</label>
                                </div>
                                <!-- end .option-group section -->
                            </div>

                        </div>

                        <div class="row">

                            <div class="section mv15">
                                <div class="option-group field">
                                    &nbsp;&nbsp;&nbsp; Tipo &nbsp;
                                    <label class="option">
                                        <input type="checkbox" name="impreso" value="checked" onclick="muestraImpreso()">
                                        <span class="checkbox"></span>Impreso</label>
                                    <label class="option">
                                        <input type="checkbox" name="digital" value="disabled" onclick="muestraDigital()">
                                        <span class="checkbox"></span>Digital</label>
                                    <label class="option">
                                        <input type="checkbox" name="radio" value="CH" onclick="muestraRadio()">
                                        <span class="checkbox"></span>Radio</label>
                                    <label class="option">
                                        <input type="checkbox" name="tv" value="CH" onclick="muestraTv()">
                                        <span class="checkbox"></span>Tv</label>
                                    <label class="option">
                                        <input type="checkbox" name="fuente" value="CH" onclick="muestraFuente()">
                                        <span class="checkbox"></span>Fuente</label>
                                </div>
                                <!-- end .option-group section -->
                            </div>

                        </div>

                        <div id="formImpreso" style="display: none;">
                            <div class="section-divider mb40" id="spy1">
                                <span>IMPRESO</span>
                            </div>

                            <!-- Input Formats -->
                            <div class="row">
                                <div class="col-md-5">
                                    <?php //debug($dcm->all()); ?>
                                    <div id="divselimp">
                                        <select name="medio_id" class="form-control" name="ciudad_id">
                                            <option value="0">Seleccione Medio</option>
                                            <?php foreach ($dcm as $d): ?>
                                              <option value="<?php echo $d['id']; ?>"><?php echo $d['nombre']; ?> (<?php echo $d['ciudad']; ?>)</option>                                                                                        
                                            <?php endforeach; ?>
                                        </select>                                                   
                                    </div>
                                </div>
                                <div class="col-md-1">                                   
                                    <button type="button" class="btn btn-primary" onclick="cargarmodal('<?php echo $this->Url->build(['controller' => 'Medios', 'action' => 'ajaxformedio', 'Impreso']); ?>');">
                                        <i class="glyphicons glyphicons-circle_plus"></i>
                                    </button>
                                </div>

                                <div class="col-md-3">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="seccion" id="email" class="gui-input" placeholder="Seccion">
                                            <label for="email" class="field-icon"><i class="fa fa-envelope"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>                                
                                <div class="col-md-3">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="search" name="pagina" id="s" class="gui-input" placeholder="Pagina">
                                            <label for="s" class="field-icon"><i class="fa fa-search"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="Titulo">
                                            <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="Genero">
                                            <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="section mb15 border-right">                                    
                                    <div class="option-group field">
                                        &nbsp;&nbsp;&nbsp;Formato&nbsp;
                                        <label class="option">
                                            <input type="radio" name="payment" checked>
                                            <span class="radio"></span>PDF</label>
                                        <label class="option">
                                            <input type="radio" name="payment">
                                            <span class="radio"></span>MP3</label>
                                        <label class="option">
                                            <input type="radio" name="payment">
                                            <span class="radio"></span>MP4</label>
                                        <label class="option">
                                            <input type="radio" name="payment">
                                            <span class="radio"></span>JPG</label>
                                    </div>
                                    <!-- end .option-group section -->
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label class="field prepend-icon append-button file">
                                            <span class="button btn-primary">Seleccionar Archivo</span>
                                            <input type="file" class="gui-file" name="file3" id="file3" onChange="document.getElementById('uploader3').value = this.value;">
                                            <input type="text" class="gui-input" id="uploader3" placeholder="">
                                            <label class="field-icon"><i class="fa fa-upload"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                            </div>                          

                            <!-- Text Areas -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <textarea class="gui-textarea" id="comment" name="comment" placeholder="Descricion"></textarea>
                                            <label for="comment" class="field-icon"><i class="fa fa-comments"></i>
                                            </label>
                                            <span class="input-footer">
                                                <strong>Obs:</strong>Una pequena descripcion...</span>
                                        </label>
                                    </div>
                                </div>                                
                            </div>

                            <div class="row">
                                <div class="col-md-11">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <div id="divselimptema">
                                                <select name="cliente_id" class="form-control" name="ciudad_id">
                                                    <option value="0">Seleccione Tema</option>
                                                    <?php foreach ($dct as $t): ?>
                                                      <option value="<?php echo $t['id']; ?>"><?php echo $t['nombre']; ?></option>                                                                                        
                                                    <?php endforeach; ?>
                                                </select>                                                   
                                            </div>
                                        </label>                                        
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <button type="button" class="btn btn-primary" onclick="cargarmodal('<?php echo $this->Url->build(['controller' => 'Temas', 'action' => 'ajaxformtema']); ?>');">
                                        <i class="glyphicons glyphicons-circle_plus"></i>
                                    </button>
                                </div>

                            </div>

                            <div class="row">

                                <div class="section mb15 border-right">                                    
                                    <div class="option-group field">
                                        &nbsp;&nbsp;&nbsp;Tendencia&nbsp;
                                        <label class="option">
                                            <input type="radio" name="payment" checked>
                                            <span class="radio"></span>Positivo</label>
                                        <label class="option">
                                            <input type="radio" name="payment">
                                            <span class="radio"></span>Negativo</label>
                                        <label class="option">
                                            <input type="radio" name="payment">
                                            <span class="radio"></span>Neutro</label>
                                    </div>
                                    <!-- end .option-group section -->
                                </div>

                            </div>     
                        </div>

                        <div id="formDigital" style="display: none;">
                            <div class="section-divider mb40" id="spy1">
                                <span>DIGITAL</span>
                            </div>

                            <!-- Input Formats -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="url" name="website" id="website" class="gui-input" placeholder="Medio">
                                            <label for="website" class="field-icon"><i class="fa fa-globe"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="email" name="email" id="email" class="gui-input" placeholder="Seccion">
                                            <label for="email" class="field-icon"><i class="fa fa-envelope"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>                                
                                <div class="col-md-4">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="search" name="s" id="s" class="gui-input" placeholder="Pagina">
                                            <label for="s" class="field-icon"><i class="fa fa-search"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="Titulo">
                                            <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="Genero">
                                            <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="Web">
                                            <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="section mb15 border-right">                                    
                                    <div class="option-group field">
                                        &nbsp;&nbsp;&nbsp;Formato&nbsp;
                                        <label class="option">
                                            <input type="radio" name="payment" checked>
                                            <span class="radio"></span>PDF</label>
                                        <label class="option">
                                            <input type="radio" name="payment">
                                            <span class="radio"></span>MP3</label>
                                        <label class="option">
                                            <input type="radio" name="payment">
                                            <span class="radio"></span>MP4</label>
                                        <label class="option">
                                            <input type="radio" name="payment">
                                            <span class="radio"></span>JPG</label>
                                    </div>
                                    <!-- end .option-group section -->
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label class="field prepend-icon append-button file">
                                            <span class="button btn-primary">Seleccionar Archivo</span>
                                            <input type="file" class="gui-file" name="file3" id="file3" onChange="document.getElementById('uploader3').value = this.value;">
                                            <input type="text" class="gui-input" id="uploader3" placeholder="">
                                            <label class="field-icon"><i class="fa fa-upload"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                            </div>                          

                            <!-- Text Areas -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <textarea class="gui-textarea" id="comment" name="comment" placeholder="Descricion"></textarea>
                                            <label for="comment" class="field-icon"><i class="fa fa-comments"></i>
                                            </label>
                                            <span class="input-footer">
                                                <strong>Obs:</strong>Una pequena descripcion...</span>
                                        </label>
                                    </div>
                                </div>                                
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="Tema">
                                            <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="section mb15 border-right">                                    
                                    <div class="option-group field">
                                        &nbsp;&nbsp;&nbsp;Tendencia&nbsp;
                                        <label class="option">
                                            <input type="radio" name="payment" checked>
                                            <span class="radio"></span>Positivo</label>
                                        <label class="option">
                                            <input type="radio" name="payment">
                                            <span class="radio"></span>Negativo</label>
                                        <label class="option">
                                            <input type="radio" name="payment">
                                            <span class="radio"></span>Neutro</label>
                                    </div>
                                    <!-- end .option-group section -->
                                </div>

                            </div>     
                        </div>
                        <div id="formRadio" style="display: none;">

                            <div class="section-divider mb40" id="spy1">
                                <span>RADIO</span>
                            </div>

                            <!-- Input Formats -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="url" name="website" id="website" class="gui-input" placeholder="Medio">
                                            <label for="website" class="field-icon"><i class="fa fa-globe"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="email" name="email" id="email" class="gui-input" placeholder="Fuente">
                                            <label for="email" class="field-icon"><i class="fa fa-envelope"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>                                
                                <div class="col-md-4">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="search" name="s" id="s" class="gui-input" placeholder="Alias">
                                            <label for="s" class="field-icon"><i class="fa fa-search"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="Titulo">
                                            <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="Riesgo Comunicacional">
                                            <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="Programa">
                                            <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="section mb15 border-right">                                    
                                    <div class="option-group field">
                                        &nbsp;&nbsp;&nbsp;Formato&nbsp;
                                        <label class="option">
                                            <input type="radio" name="payment" checked>
                                            <span class="radio"></span>PDF</label>
                                        <label class="option">
                                            <input type="radio" name="payment">
                                            <span class="radio"></span>MP3</label>
                                        <label class="option">
                                            <input type="radio" name="payment">
                                            <span class="radio"></span>MP4</label>
                                        <label class="option">
                                            <input type="radio" name="payment">
                                            <span class="radio"></span>JPG</label>
                                    </div>
                                    <!-- end .option-group section -->
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label class="field prepend-icon append-button file">
                                            <span class="button btn-primary">Seleccionar Archivo</span>
                                            <input type="file" class="gui-file" name="file3" id="file3" onChange="document.getElementById('uploader3').value = this.value;">
                                            <input type="text" class="gui-input" id="uploader3" placeholder="">
                                            <label class="field-icon"><i class="fa fa-upload"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                            </div>                          

                            <!-- Text Areas -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <textarea class="gui-textarea" id="comment" name="comment" placeholder="Descricion"></textarea>
                                            <label for="comment" class="field-icon"><i class="fa fa-comments"></i>
                                            </label>
                                            <span class="input-footer">
                                                <strong>Obs:</strong>Una pequena descripcion...</span>
                                        </label>
                                    </div>
                                </div>                                
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="Tema">
                                            <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="section mb15 border-right">                                    
                                    <div class="option-group field">
                                        &nbsp;&nbsp;&nbsp;Tendencia&nbsp;
                                        <label class="option">
                                            <input type="radio" name="payment" checked>
                                            <span class="radio"></span>Positivo</label>
                                        <label class="option">
                                            <input type="radio" name="payment">
                                            <span class="radio"></span>Negativo</label>
                                        <label class="option">
                                            <input type="radio" name="payment">
                                            <span class="radio"></span>Neutro</label>
                                    </div>
                                    <!-- end .option-group section -->
                                </div>

                            </div>     

                        </div>



                        <div id="formTv" style="display: none;">
                            <div class="section-divider mb40" id="spy1">
                                <span>TV</span>
                            </div>

                            <!-- Input Formats -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="url" name="website" id="website" class="gui-input" placeholder="Medio">
                                            <label for="website" class="field-icon"><i class="fa fa-globe"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="email" name="email" id="email" class="gui-input" placeholder="Fuente">
                                            <label for="email" class="field-icon"><i class="fa fa-envelope"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>                                
                                <div class="col-md-4">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="search" name="s" id="s" class="gui-input" placeholder="Alias">
                                            <label for="s" class="field-icon"><i class="fa fa-search"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="Titulo">
                                            <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="Riesgo Comunicacional">
                                            <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="Programa">
                                            <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="section mb15 border-right">                                    
                                    <div class="option-group field">
                                        &nbsp;&nbsp;&nbsp;Formato&nbsp;
                                        <label class="option">
                                            <input type="radio" name="payment" checked>
                                            <span class="radio"></span>PDF</label>
                                        <label class="option">
                                            <input type="radio" name="payment">
                                            <span class="radio"></span>MP3</label>
                                        <label class="option">
                                            <input type="radio" name="payment">
                                            <span class="radio"></span>MP4</label>
                                        <label class="option">
                                            <input type="radio" name="payment">
                                            <span class="radio"></span>JPG</label>
                                    </div>
                                    <!-- end .option-group section -->
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label class="field prepend-icon append-button file">
                                            <span class="button btn-primary">Seleccionar Archivo</span>
                                            <input type="file" class="gui-file" name="file3" id="file3" onChange="document.getElementById('uploader3').value = this.value;">
                                            <input type="text" class="gui-input" id="uploader3" placeholder="">
                                            <label class="field-icon"><i class="fa fa-upload"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                            </div>                          

                            <!-- Text Areas -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <textarea class="gui-textarea" id="comment" name="comment" placeholder="Descricion"></textarea>
                                            <label for="comment" class="field-icon"><i class="fa fa-comments"></i>
                                            </label>
                                            <span class="input-footer">
                                                <strong>Obs:</strong>Una pequena descripcion...</span>
                                        </label>
                                    </div>
                                </div>                                
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="Tema">
                                            <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="section mb15 border-right">                                    
                                    <div class="option-group field">
                                        &nbsp;&nbsp;&nbsp;Tendencia&nbsp;
                                        <label class="option">
                                            <input type="radio" name="payment" checked>
                                            <span class="radio"></span>Positivo</label>
                                        <label class="option">
                                            <input type="radio" name="payment">
                                            <span class="radio"></span>Negativo</label>
                                        <label class="option">
                                            <input type="radio" name="payment">
                                            <span class="radio"></span>Neutro</label>
                                    </div>
                                    <!-- end .option-group section -->
                                </div>

                            </div>     

                        </div>

                        <div id="formFuente" style="display: none;">
                            <div class="section-divider mb40" id="spy1">
                                <span>FUENTE</span>
                            </div>

                            <!-- Input Formats -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="url" name="website" id="website" class="gui-input" placeholder="Medio">
                                            <label for="website" class="field-icon"><i class="fa fa-globe"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="Titulo">
                                            <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="Alias">
                                            <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="section mb15 border-right">                                    
                                    <div class="option-group field">
                                        &nbsp;&nbsp;&nbsp;Formato&nbsp;
                                        <label class="option">
                                            <input type="radio" name="payment" checked>
                                            <span class="radio"></span>PDF</label>
                                        <label class="option">
                                            <input type="radio" name="payment">
                                            <span class="radio"></span>MP3</label>
                                        <label class="option">
                                            <input type="radio" name="payment">
                                            <span class="radio"></span>MP4</label>
                                        <label class="option">
                                            <input type="radio" name="payment">
                                            <span class="radio"></span>JPG</label>
                                    </div>
                                    <!-- end .option-group section -->
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label class="field prepend-icon append-button file">
                                            <span class="button btn-primary">Seleccionar Archivo</span>
                                            <input type="file" class="gui-file" name="file3" id="file3" onChange="document.getElementById('uploader3').value = this.value;">
                                            <input type="text" class="gui-input" id="uploader3" placeholder="">
                                            <label class="field-icon"><i class="fa fa-upload"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                            </div>                          

                            <!-- Text Areas -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <textarea class="gui-textarea" id="comment" name="comment" placeholder="Descricion"></textarea>
                                            <label for="comment" class="field-icon"><i class="fa fa-comments"></i>
                                            </label>
                                            <span class="input-footer">
                                                <strong>Obs:</strong>Una pequena descripcion...</span>
                                        </label>
                                    </div>
                                </div>                                
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="Tema">
                                            <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="section mb15 border-right">                                    
                                    <div class="option-group field">
                                        &nbsp;&nbsp;&nbsp;Tendencia&nbsp;
                                        <label class="option">
                                            <input type="radio" name="payment" checked>
                                            <span class="radio"></span>Positivo</label>
                                        <label class="option">
                                            <input type="radio" name="payment">
                                            <span class="radio"></span>Negativo</label>
                                        <label class="option">
                                            <input type="radio" name="payment">
                                            <span class="radio"></span>Neutro</label>
                                    </div>
                                    <!-- end .option-group section -->
                                </div>

                            </div>     

                        </div>


                        <div class="panel-footer text-right">
                            <button type="submit" class="button btn-primary"> Guardar Noticia</button>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- end: .admin-form -->

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

<script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/utility/utility.js"></script>
<script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/main.js"></script>
<script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/demo.js"></script>

<script src="<?= $this->request->webroot; ?>js/vendor/plugins/moment/moment.min.js"></script>
<script src="<?= $this->request->webroot; ?>js/vendor/plugins/daterange/daterangepicker.js"></script>
<script src="<?= $this->request->webroot; ?>js/vendor/plugins/datepicker/js/bootstrap-datetimepicker.js"></script>

<!-- Select2 Plugin Plugin -->
<?php echo $this->Html->script('cambiaColorForm', ['block' => 'scriptjs']); ?>
<script>
// Init DateRange plugin
                                              $('#datetimepicker1, #datetimepicker2').datetimepicker({
                                                  pickTime: false                                                 
                                              });

                                              $('#multiselect2').multiselect({
                                                  includeSelectAllOption: true
                                              });

                                              function muestraImpreso() {
                                                  $("#formImpreso").toggle('slow');
                                              }
                                              function muestraDigital() {
                                                  $("#formDigital").toggle('slow');
                                              }
                                              function muestraRadio() {
                                                  $("#formRadio").toggle('slow');
                                              }
                                              function muestraTv() {
                                                  $("#formTv").toggle('slow');
                                              }
                                              function muestraFuente() {
                                                  $("#formFuente").toggle('slow');
                                              }

</script>
<!-- END: PAGE SCRIPTS -->