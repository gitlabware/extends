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
                        <?php echo $this->Form->create($noticia, ['id' => 'formNoticia', 'enctype' => 'multipart/form-data']); ?>                        
                        <div class="section-divider mb40" id="spy1">
                            <span>Nueva Noticia</span>
                        </div>
                        <!-- .section-divider -->                           

                        <!-- Input Icons -->
                        <div class="row">
                            <div class="col-md-5">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="text" name="fecha" class="validate[required] form-control" id="datetimepicker1">
                                        <label for="firstname" class="field-icon"><i class="fa fa-calendar"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div id="divMulClientes">
                                    <select name="clientes[]" class="select2-multiple form-control select-primary" placeholder="Clientes" multiple="multiple">
                                        <?php foreach ($dcc as $c): ?>
                                          <option value="<?= $c['id']; ?>"><?= $c['nombre']; ?></option>
                                        <?php endforeach; ?>
                                    </select>                         
                                </div>
                            </div>          
                            <div class="col-md-1">                                   
                                <button type="button" class="btn btn-primary" onclick="cargarmodal('<?php echo $this->Url->build(['controller' => 'Clientes', 'action' => 'ajaxformcliente']); ?>');">
                                    <i class="glyphicons glyphicons-circle_plus"></i>
                                </button>
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
                                        <input type="checkbox" name="tipo[]" value="Impreso" onclick="muestraImpreso()">
                                        <span class="checkbox"></span>Impreso</label>
                                    <label class="option">
                                        <input type="checkbox" name="tipo[]" value="Digital" onclick="muestraDigital()">
                                        <span class="checkbox"></span>Digital</label>
                                    <label class="option">
                                        <input type="checkbox" name="tipo[]" value="Radio" onclick="muestraRadio()">
                                        <span class="checkbox"></span>Radio</label>
                                    <label class="option">
                                        <input type="checkbox" name="tipo[]" value="Tv" onclick="muestraTv()">
                                        <span class="checkbox"></span>Tv</label>
                                    <label class="option">
                                        <input type="checkbox" name="tipo[]" value="Fuente" onclick="muestraFuente()">
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
                                        <select name="data[0][medio_id]" class="form-control">
                                            <option value="0">Seleccione Medio</option>
                                            <?php foreach ($dcm as $d): ?>
                                              <option value="<?php echo $d['id']; ?>"><?php echo $d['nombre']; ?> (<?php echo $d['ciudad']; ?>)</option>                                                                                        
                                            <?php endforeach; ?>
                                        </select>                                                   
                                    </div>
                                    <input type="hidden" name="data[0][tipo_id]" value="Impreso">
                                </div>
                                <div class="col-md-1">                                   
                                    <button type="button" class="btn btn-primary" onclick="cargarmodal('<?php echo $this->Url->build(['controller' => 'Medios', 'action' => 'ajaxformedio', 'Impreso', 'divselimp']); ?>');">
                                        <i class="glyphicons glyphicons-circle_plus"></i>
                                    </button>
                                </div>

                                <div class="col-md-3">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="data[0][seccion]" id="email" class="gui-input" placeholder="Seccion">
                                            <label for="email" class="field-icon"><i class="fa fa-envelope"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>                                
                                <div class="col-md-3">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="data[0][pagina]" id="s" class="gui-input" placeholder="Pagina">
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
                                            <input type="text" name="data[0][titulo]" id="firstname" class="gui-input" placeholder="Titulo">
                                            <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="data[0][genero]" id="genero" class="gui-input" placeholder="Genero">
                                            <label for="genero" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <!--
                            <div class="row">

                                <div class="section mb15 border-right">                                    
                                    <div class="option-group field">
                                        &nbsp;&nbsp;&nbsp;Formato&nbsp;
                                        <label class="option">
                                            <input type="radio" value="pdf" name="data[0][formato]" checked>
                                            <span class="radio"></span>PDF</label>
                                        <label class="option">
                                            <input type="radio" value="mp3" name="data[0][formato]">
                                            <span class="radio"></span>MP3</label>
                                        <label class="option">
                                            <input type="radio" value="mp4" name="data[0][formato]">
                                            <span class="radio"></span>MP4</label>
                                        <label class="option">
                                            <input type="radio" value="jpg" name="data[0][formato]">
                                            <span class="radio"></span>JPG</label>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label class="field prepend-icon append-button file">
                                            <span class="button btn-primary">Seleccionar Archivo</span>
                                            <input type="file" class="gui-file" name="data[0][file]" id="file3" onChange="document.getElementById('uploader3').value = this.value;">
                                            <input type="text" class="gui-input" id="uploader3" placeholder="">
                                            <label class="field-icon"><i class="fa fa-upload"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            -->                          
                            <div class="row" id="btn-arch-0">
                                <div class="col-md-3">
                                    <div class="section">
                                        <button class="btn btn-xs btn-system btn-block" type="button" onclick="add_ar_adj(0);">Archivo Adjunto</button>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="section">
                                        <button class="btn btn-xs btn-primary btn-block" type="button" onclick="add_url_adj(0);">Url de Adjunto</button>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="section">
                                        <button class="btn btn-xs btn-danger btn-block" type="button" onclick="quita_ar_adj(0);">Quitar Adjunto</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Text Areas -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <textarea class="gui-textarea" id="comment" name="data[0][descripcion]" placeholder="Descricion"></textarea>
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
                                            <div id="divselimptemai">
                                                <select name="data[0][tema_id]" class="form-control" name="tema_id">
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
                                    <button type="button" class="btn btn-primary" onclick="cargarmodal('<?php echo $this->Url->build(['controller' => 'Temas', 'action' => 'ajaxformtema', 'divselimptemai']); ?>');">
                                        <i class="glyphicons glyphicons-circle_plus"></i>
                                    </button>
                                </div>

                            </div>

                            <div class="row">

                                <div class="section mb15 border-right">                                    
                                    <div class="option-group field">
                                        &nbsp;&nbsp;&nbsp;Tendencia&nbsp;
                                        <label class="option">
                                            <input type="radio" value="Positivo" name="data[0][tendencia]" checked>
                                            <span class="radio"></span>Positivo</label>
                                        <label class="option">
                                            <input type="radio" value="Negativo" name="data[0][tendencia]">
                                            <span class="radio"></span>Negativo</label>
                                        <label class="option">
                                            <input type="radio" value="Neutro" name="data[0][tendencia]">
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
                                <div class="col-md-5">
                                    <?php //debug($dcm->all()); ?>
                                    <div id="divseldig">
                                        <select name="data[1][medio_id]" class="form-control">
                                            <option value="0">Seleccione Medio</option>
                                            <?php foreach ($dcmd as $d): ?>
                                              <option value="<?php echo $d['id']; ?>"><?php echo $d['nombre']; ?> (<?php echo $d['ciudad']; ?>)</option>                                                                                        
                                            <?php endforeach; ?>
                                        </select>                                                   
                                    </div>
                                </div>
                                <input type="hidden" name="data[1][tipo_id]" value="Digital">
                                <div class="col-md-1">                                   
                                    <button type="button" class="btn btn-primary" onclick="cargarmodal('<?php echo $this->Url->build(['controller' => 'Medios', 'action' => 'ajaxformedio', 'Digital', 'divseldig']); ?>');">
                                        <i class="glyphicons glyphicons-circle_plus"></i>
                                    </button>
                                </div>

                                <div class="col-md-3">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="data[1][seccion]" id="email" class="gui-input" placeholder="Seccion">
                                            <label for="email" class="field-icon"><i class="fa fa-envelope"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>                                
                                <div class="col-md-3">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="data[1][pagina]" id="s" class="gui-input" placeholder="Pagina">
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
                                            <input type="text" name="data[1][titulo]" id="firstname" class="gui-input" placeholder="Titulo">
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
                                            <input type="text" name="data[1][web]" id="firstname" class="gui-input" placeholder="Web">
                                            <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="data[1][genero]" id="genero" class="gui-input" placeholder="Genero">
                                            <label for="genero" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                            </div>

                            <div class="row" id="btn-arch-1">
                                <div class="col-md-3">
                                    <div class="section">
                                        <button class="btn btn-xs btn-system btn-block" type="button" onclick="add_ar_adj(1);">Archivo Adjunto</button>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="section">
                                        <button class="btn btn-xs btn-primary btn-block" type="button" onclick="add_url_adj(1);">Url de Adjunto</button>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="section">
                                        <button class="btn btn-xs btn-danger btn-block" type="button" onclick="quita_ar_adj(1);">Quitar Adjunto</button>
                                    </div>
                                </div>
                            </div>                         

                            <!-- Text Areas -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <textarea class="gui-textarea" id="comment" name="data[1][descripcion]" placeholder="Descricion"></textarea>
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
                                            <div id="divselimptemad">
                                                <select name="data[1][tema_id]" class="form-control" name="tema_id">
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
                                    <button type="button" class="btn btn-primary" onclick="cargarmodal('<?php echo $this->Url->build(['controller' => 'Temas', 'action' => 'ajaxformtema', 'divselimptemad']); ?>');">
                                        <i class="glyphicons glyphicons-circle_plus"></i>
                                    </button>
                                </div>

                            </div>

                            <div class="row">

                                <div class="section mb15 border-right">                                    
                                    <div class="option-group field">
                                        &nbsp;&nbsp;&nbsp;Tendencia&nbsp;
                                        <label class="option">
                                            <input type="radio" value="Positivo" name="data[1][tendencia]" checked>
                                            <span class="radio"></span>Positivo</label>
                                        <label class="option">
                                            <input type="radio" value="Negativo" name="data[1][tendencia]">
                                            <span class="radio"></span>Negativo</label>
                                        <label class="option">
                                            <input type="radio" value="Neutro" name="data[1][tendencia]">
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
                                <div class="col-md-5">
                                    <?php //debug($dcm->all()); ?>
                                    <div id="divselrad">
                                        <select name="data[2][medio_id]" class="form-control">
                                            <option value="0">Seleccione Medio</option>
                                            <?php foreach ($dcmr as $d): ?>
                                              <option value="<?php echo $d['id']; ?>"><?php echo $d['nombre']; ?> (<?php echo $d['ciudad']; ?>)</option>                                                                                        
                                            <?php endforeach; ?>
                                        </select> 
                                        <input type="hidden" name="data[2][tipo_id]" value="Radio">
                                    </div>
                                </div>
                                <div class="col-md-1">                                   
                                    <button type="button" class="btn btn-primary" onclick="cargarmodal('<?php echo $this->Url->build(['controller' => 'Medios', 'action' => 'ajaxformedio', 'Radio', 'divselrad']); ?>');">
                                        <i class="glyphicons glyphicons-circle_plus"></i>
                                    </button>
                                </div>

                                <div class="col-md-3">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="data[2][fuente]" id="email" class="gui-input" placeholder="Fuente">
                                            <label for="email" class="field-icon"><i class="fa fa-envelope"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>                                
                                <div class="col-md-3">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="data[2][pagina]" id="s" class="gui-input" placeholder="Alias">
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
                                            <input type="text" name="data[2][titulo]" id="firstname" class="gui-input" placeholder="Titulo">
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
                                            <input type="text" name="data[2][riesgo]" id="firstname" class="gui-input" placeholder="Riesgo Comunicacional">
                                            <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="data[2][programa]" id="firstname" class="gui-input" placeholder="Programa">
                                            <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row" id="btn-arch-2">
                                <div class="col-md-3">
                                    <div class="section">
                                        <button class="btn btn-xs btn-system btn-block" type="button" onclick="add_ar_adj(2);">Archivo Adjunto</button>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="section">
                                        <button class="btn btn-xs btn-primary btn-block" type="button" onclick="add_url_adj(2);">Url de Adjunto</button>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="section">
                                        <button class="btn btn-xs btn-danger btn-block" type="button" onclick="quita_ar_adj(2);">Quitar Adjunto</button>
                                    </div>
                                </div>
                            </div>                         

                            <!-- Text Areas -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <textarea class="gui-textarea" id="comment" name="data[2][descripcion]" placeholder="Descricion"></textarea>
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
                                            <div id="divselimptemar">
                                                <select name="data[2][tema_id]" class="form-control" name="tema_id">
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
                                    <button type="button" class="btn btn-primary" onclick="cargarmodal('<?php echo $this->Url->build(['controller' => 'Temas', 'action' => 'ajaxformtema', 'divselimptemar']); ?>');">
                                        <i class="glyphicons glyphicons-circle_plus"></i>
                                    </button>
                                </div>

                            </div>

                            <div class="row">

                                <div class="section mb15 border-right">                                    
                                    <div class="option-group field">
                                        &nbsp;&nbsp;&nbsp;Tendencia&nbsp;
                                        <label class="option">
                                            <input type="radio" value="Positivo" name="data[2][tendencia]" checked>
                                            <span class="radio"></span>Positivo</label>
                                        <label class="option">
                                            <input type="radio" value="Negativo" name="data[2][tendencia]">
                                            <span class="radio"></span>Negativo</label>
                                        <label class="option">
                                            <input type="radio" value="Neutro" name="data[2][tendencia]">
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
                                <div class="col-md-5">
                                    <?php //debug($dcm->all()); ?>
                                    <div id="divseltv">
                                        <select name="data[3][medio_id]" class="form-control">
                                            <option value="0">Seleccione Medio</option>
                                            <?php foreach ($dcmt as $d): ?>
                                              <option value="<?php echo $d['id']; ?>"><?php echo $d['nombre']; ?> (<?php echo $d['ciudad']; ?>)</option>                                                                                        
                                            <?php endforeach; ?>
                                        </select>  
                                        <input type="hidden" name="data[3][tipo_id]" value="Tv">
                                    </div>
                                </div>
                                <div class="col-md-1">                                   
                                    <button type="button" class="btn btn-primary" onclick="cargarmodal('<?php echo $this->Url->build(['controller' => 'Medios', 'action' => 'ajaxformedio', 'Tv', 'divseltv']); ?>');">
                                        <i class="glyphicons glyphicons-circle_plus"></i>
                                    </button>
                                </div>

                                <div class="col-md-3">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="data[3][fuente]" id="email" class="gui-input" placeholder="Fuente">
                                            <label for="email" class="field-icon"><i class="fa fa-envelope"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>                                
                                <div class="col-md-3">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="data[3][pagina]" id="s" class="gui-input" placeholder="Alias">
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
                                            <input type="text" name="data[3][titulo]" id="firstname" class="gui-input" placeholder="Titulo">
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
                                            <input type="text" name="data[3][riesgo]" id="firstname" class="gui-input" placeholder="Riesgo Comunicacional">
                                            <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="data[3][programa]" id="firstname" class="gui-input" placeholder="Programa">
                                            <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row" id="btn-arch-3">
                                <div class="col-md-3">
                                    <div class="section">
                                        <button class="btn btn-xs btn-system btn-block" type="button" onclick="add_ar_adj(3);">Archivo Adjunto</button>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="section">
                                        <button class="btn btn-xs btn-primary btn-block" type="button" onclick="add_url_adj(3);">Url de Adjunto</button>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="section">
                                        <button class="btn btn-xs btn-danger btn-block" type="button" onclick="quita_ar_adj(3);">Quitar Adjunto</button>
                                    </div>
                                </div>
                            </div>                          

                            <!-- Text Areas -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <textarea class="gui-textarea" id="comment" name="data[3][descripcion]" placeholder="Descricion"></textarea>
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
                                            <div id="divselimptemat">
                                                <select name="data[3][tema_id]" class="form-control" name="tema_id">
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
                                    <button type="button" class="btn btn-primary" onclick="cargarmodal('<?php echo $this->Url->build(['controller' => 'Temas', 'action' => 'ajaxformtema', 'divselimptemat']); ?>');">
                                        <i class="glyphicons glyphicons-circle_plus"></i>
                                    </button>
                                </div>

                            </div>

                            <div class="row">

                                <div class="section mb15 border-right">                                    
                                    <div class="option-group field">
                                        &nbsp;&nbsp;&nbsp;Tendencia&nbsp;
                                        <label class="option">
                                            <input type="radio" value="Positivo" name="data[3][tendencia]" checked>
                                            <span class="radio"></span>Positivo</label>
                                        <label class="option">
                                            <input type="radio" value="Negativo" name="data[3][tendencia]">
                                            <span class="radio"></span>Negativo</label>
                                        <label class="option">
                                            <input type="radio" value="Neutro" name="data[3][tendencia]">
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
                                <div class="col-md-10">
                                    <?php //debug($dcm->all()); ?>
                                    <div id="divselfue">
                                        <select name="data[4][medio_id]" class="form-control">
                                            <option value="0">Seleccione Medio</option>
                                            <?php foreach ($dcmf as $d): ?>
                                              <option value="<?php echo $d['id']; ?>"><?php echo $d['nombre']; ?> (<?php echo $d['ciudad']; ?>)</option>                                                                                        
                                            <?php endforeach; ?>
                                        </select>   
                                        <input type="hidden" name="data[4][tipo_id]" value="Fuente">
                                    </div>
                                </div>
                                <div class="col-md-2">                                   
                                    <button type="button" class="btn btn-primary" onclick="cargarmodal('<?php echo $this->Url->build(['controller' => 'Medios', 'action' => 'ajaxformedio', 'Fuente', 'divselfue']); ?>');">
                                        <i class="glyphicons glyphicons-circle_plus"></i>
                                    </button>
                                </div>                                

                            </div>
                            <p>&nbsp;</p>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="data[4][titlulo]" id="firstname" class="gui-input" placeholder="Titulo">
                                            <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="data[4][fuente]" id="firstname" class="gui-input" placeholder="Fuente">
                                            <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="data[4][alias]" id="firstname" class="gui-input" placeholder="Alias">
                                            <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row" id="btn-arch-4">
                                <div class="col-md-3">
                                    <div class="section">
                                        <button class="btn btn-xs btn-system btn-block" type="button" onclick="add_ar_adj(4);">Archivo Adjunto</button>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="section">
                                        <button class="btn btn-xs btn-primary btn-block" type="button" onclick="add_url_adj(4);">Url de Adjunto</button>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="section">
                                        <button class="btn btn-xs btn-danger btn-block" type="button" onclick="quita_ar_adj(4);">Quitar Adjunto</button>
                                    </div>
                                </div>
                            </div>                     

                            <!-- Text Areas -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <textarea class="gui-textarea" id="comment" name="data[4][descripcion]" placeholder="Descricion"></textarea>
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
                                            <div id="divselimptemaf">
                                                <select name="data[4][tema_id]" class="form-control" name="tema_id">
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
                                    <button type="button" class="btn btn-primary" onclick="cargarmodal('<?php echo $this->Url->build(['controller' => 'Temas', 'action' => 'ajaxformtema', 'divselimptemaf']); ?>');">
                                        <i class="glyphicons glyphicons-circle_plus"></i>
                                    </button>
                                </div>

                            </div>

                            <div class="row">
                                <div class="section mb15 border-right">                                    
                                    <div class="option-group field">
                                        &nbsp;&nbsp;&nbsp;Tendencia&nbsp;
                                        <label class="option">
                                            <input type="radio" value="Positivo" name="data[4][tendencia]" checked>
                                            <span class="radio"></span>Positivo</label>
                                        <label class="option">
                                            <input type="radio" value="Negativo" name="data[4][tendencia]">
                                            <span class="radio"></span>Negativo</label>
                                        <label class="option">
                                            <input type="radio" value="Neutro" name="data[4][tendencia]">
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

</section>
<!-- End: Content -->
</div>


</div>
</aside>
<!-- end: .tray-right -->

</section>
<!-- End: Content -->
<div id="cod_arch" style="display: none;">
    <div class="row">
        <div class="col-md-12">
            <div class="section">
                <label class="field prepend-icon append-button file">
                    <span class="button btn-system">Seleccionar Archivo</span>
                    <input type="file" class="gui-file" name="data[0][file]" id="file3" required="true" onchange="var valor = $(this).val();
                          $('#up-' + $(this).prop('id')).val(valor);">
                    <input type="text" class="gui-input" id="uploader3" placeholder="">
                    <label class="field-icon"><i class="fa fa-upload"></i>
                    </label>
                </label>
            </div>
        </div>
    </div>
</div>

<div id="cod_arch_u" style="display: none;">
    <div class="row">
        <div class="col-md-12">
            <div class="section">
                <label class="field prepend-icon">
                    <input type="text" class="gui-input eynar" placeholder="Ingrese la Url del archivo" required="true">
                    <label for="firstname" class="field-icon"><i class="fa fa-link"></i>
                    </label>
                </label>
            </div>
        </div>
    </div>
</div>

<script>

  var vec_file = [];
  vec_file[0] = 0;
  vec_file[1] = 0;
  vec_file[2] = 0;
  vec_file[3] = 0;
  vec_file[4] = 0;
  function add_ar_adj(numero) {

      if (vec_file[numero] < 1) {
          vec_file[numero]++;
          $('#cod_arch div:first').prop('id', 'darchivo-' + numero + '-' + vec_file[numero]);
          $('#cod_arch input[type=file]').each(function (i, val) {
              $(val).prop('name', 'data[' + numero + '][adjuntos][' + vec_file[numero] + '][archivo]');
              $(val).attr('id', 'file-' + numero + '-' + vec_file[numero]);
          });
          $('#cod_arch input[type=text]').each(function (i, val) {
              $(val).prop('id', 'up-file-' + numero + '-' + vec_file[numero]);
          });
          var html_arch = $('#cod_arch').html();
          $('#btn-arch-' + (numero)).after(html_arch);
      }
  }

  function add_url_adj(numero) {
      if (vec_file[numero] < 1) {
          vec_file[numero]++;
          $('#cod_arch_u div:first').prop('id', 'darchivo-' + numero + '-' + vec_file[numero]);
          $('#cod_arch_u input[type=text]').each(function (i, val) {
              $(val).prop('name', 'data[' + numero + '][adjuntos][' + vec_file[numero] + '][url]');
              $(val).attr('id', 'file-url-' + numero + '-' + vec_file[numero]);
          });
          var html_arch = $('#cod_arch_u').html();
          $('#btn-arch-' + (numero)).after(html_arch);
      }
  }

  function quita_ar_adj(numero) {
      if (vec_file[numero] > 0) {
          $('#darchivo-' + numero + '-' + vec_file[numero]).remove();
          vec_file[numero]--;
      }
  }

</script>

<script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/utility/utility.js"></script>
<script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/main.js"></script>
<script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/demo.js"></script>

<script src="<?= $this->request->webroot; ?>js/vendor/plugins/moment/moment.min.js"></script>
<script src="<?= $this->request->webroot; ?>js/vendor/plugins/daterange/daterangepicker.js"></script>
<script src="<?= $this->request->webroot; ?>js/vendor/plugins/datepicker/js/bootstrap-datetimepicker.js"></script>
<script src="<?= $this->request->webroot; ?>js/vendor/plugins/select2/select2.min.js"></script>

<!-- Select2 Plugin Plugin -->
<?php echo $this->Html->script('cambiaColorForm', ['block' => 'scriptjs']); ?>
<script>
// Init DateRange plugin
  $('#datetimepicker1, #datetimepicker2').datetimepicker({
      pickTime: false,
      format: 'YYYY-MM-DD'
  });

  $('#multiselect2').multiselect({
      includeSelectAllOption: true
  });

  // Init Select2 - Basic Multiple
  $(".select2-multiple").select2({
      placeholder: "Seleccione cliente",
      allowClear: true
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
<script>
  jQuery(document).ready(function () {
      // binds form submission and fields to the validation engine
      jQuery("#formNoticia").validationEngine();
      $('#formNoticia').submit(function () {

      });
  });
</script>
<!-- END: PAGE SCRIPTS -->