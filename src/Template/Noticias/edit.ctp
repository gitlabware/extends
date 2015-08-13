<?php
echo $this->Html->css([
  'admin-forms',
  '../js/vendor/plugins/daterange/daterangepicker',
  '../js/vendor/plugins/datepicker/css/bootstrap-datetimepicker',
  '../js/vendor/plugins/select2/css/core'
  ], ['block' => 'addcss']);
?>
<script>
  var vec_file = [];
  vec_file[0] = 0;
  vec_file[1] = 0;
  vec_file[2] = 0;
  vec_file[3] = 0;
  vec_file[4] = 0;
</script>
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
                            <span>Registro de Noticia</span>
                        </div>
                        <!-- .section-divider -->                           

                        <!-- Input Icons -->
                        <div class="row">
                            <div class="col-md-5">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <?php echo $this->Form->text('fecha', ['class' => 'validate[required] form-control', 'id' => 'datetimepicker1']); ?>
                                        <label for="firstname" class="field-icon"><i class="fa fa-calendar"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div id="divMulClientes">
                                    <?php echo $this->Form->select('cliente_id', $l_clientes, ['class' => 'select2-multiple form-control select-primary']); ?>                   
                                </div>
                            </div>          
                            <div class="col-md-1">                                   
                                <button type="button" class="btn btn-primary" onclick="cargarmodal('<?php echo $this->Url->build(['controller' => 'Clientes', 'action' => 'ajaxformcliente2', 'divMulClientes']); ?>');">
                                    <i class="glyphicons glyphicons-circle_plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <?php echo $this->Form->text('notaprensa', ['class' => 'gui-input', 'placeholder' => 'Nota de Prensa']); ?>
                                        <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <?php echo $this->Form->text('codigo', ['class' => 'gui-input', 'placeholder' => 'Codigo']); ?>
                                        <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="section mb15 border-right">   
                                <div class="option-group field">
                                    <?php
                                    echo $this->Form->input(
                                      'clasificacion', [
                                      'templates' => [
                                        'inputContainer' => '&nbsp;&nbsp;&nbsp;Clasificacion&nbsp; {{content}}',
                                        'radio' => '<input type="radio" name="{{name}}" value="{{value}}"{{attrs}}><span class="radio"></span>{{value}}',
                                        'radioWrapper' => '<label class="option">{{input}}</label>'
                                      ],
                                      'options' => [
                                        ['value' => 'A', 'text' => 'A'],
                                        ['value' => 'B', 'text' => 'B'],
                                        ['value' => 'C', 'text' => 'C']
                                      ],
                                      'type' => 'radio',
                                      'label' => FALSE
                                      ]
                                    );
                                    ?>
                                </div>
                                <!-- end .option-group section -->
                            </div>

                        </div>


                        <?php if ($noticia->tipo == 'Impreso'): ?>
                          <div id="formImpreso">
                              <div class="section-divider mb40" id="spy1">
                                  <span>IMPRESO</span>
                              </div>

                              <!-- Input Formats -->
                              <div class="row">
                                  <div class="col-md-5">
                                      <div id="divselimp">
                                          <?php echo $this->Form->select("medio_id", $dcm, ['class' => 'form-control', 'empty' => 'Seleccione el medio']); ?>
                                      </div>
                                      <?= $this->Form->hidden("tipo_id", ['value' => 'Impreso']); ?>
                                  </div>
                                  <div class="col-md-1">                                   
                                      <button type="button" class="btn btn-primary" onclick="cargarmodal('<?php echo $this->Url->build(['controller' => 'Medios', 'action' => 'ajaxformedio', 'Impreso', 'divselimp', 'medio_id']); ?>');">
                                          <i class="glyphicons glyphicons-circle_plus"></i>
                                      </button>
                                  </div>

                                  <div class="col-md-3">
                                      <div class="section">
                                          <label class="field prepend-icon">
                                              <?= $this->Form->text("seccion", ['id' => 'email', 'class' => 'gui-input', 'placeholder' => 'Seccion']) ?>
                                              <label for="email" class="field-icon"><i class="fa fa-envelope"></i>
                                              </label>
                                          </label>
                                      </div>
                                  </div>                                
                                  <div class="col-md-3">
                                      <div class="section">
                                          <label class="field prepend-icon">
                                              <?= $this->Form->text("pagina", ['id' => 's', 'class' => 'gui-input', 'placeholder' => 'Pagina']) ?>
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
                                              <?= $this->Form->text("titulo", ['id' => 'firstname', 'class' => 'gui-input', 'placeholder' => 'Titulo']) ?>
                                              <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                              </label>
                                          </label>
                                      </div>
                                  </div>

                                  <div class="col-md-4">
                                      <div class="section">
                                          <label class="field prepend-icon">
                                              <?= $this->Form->text("genero", ['id' => 'genero', 'class' => 'gui-input', 'placeholder' => 'Genero']) ?>
                                              <label for="genero" class="field-icon"><i class="fa fa-user"></i>
                                              </label>
                                          </label>
                                      </div>
                                  </div>

                              </div>                      
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
                              <?php foreach ($adjuntos_n as $key => $ad): ?>
                                <?php $num = $key + 1; ?>
                                <script>
                                  vec_file[0]++;
                                </script>
                                <div class="row" id="darchivo-0-<?= $num ?>">
                                    <div class="col-md-12">
                                        <div class="section">

                                            <?php if (!empty($ad->url_ext)): ?>
                                              <?php $url = $ad->url_ext; ?>
                                              <?= $this->Form->hidden("data.0.adjuntos.$num.url", ['value' => $ad->url_ext]); ?>
                                            <?php else: ?>
                                              <?= $this->Form->hidden("data.0.adjuntos.$num.url_int", ['value' => $ad->url_int]); ?>
                                              <?php $url = $this->request->webroot . 'adjuntos/' . $ad->url_int; ?>
                                            <?php endif; ?>
                                            <a class="label label-primary" href="<?= $url ?>">
                                                <?= $url ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                              <?php endforeach; ?>

                              <!-- Text Areas -->
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="section">
                                          <label class="field prepend-icon">
                                              <?php echo $this->Form->textarea("descripcion", ['class' => 'gui-textarea', 'id' => 'comment', 'placeholder' => 'Descripcion']) ?>
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
                                                  <?php echo $this->Form->select("tema_id", $dct, ['class' => 'form-control', 'empty' => 'Seleccione Tema']); ?>                                         
                                              </div>
                                          </label>                                        
                                      </div>
                                  </div>
                                  <div class="col-md-1">
                                      <button type="button" class="btn btn-primary" onclick="cargarmodal('<?php echo $this->Url->build(['controller' => 'Temas', 'action' => 'ajaxformtema', 'divselimptemai', 'tema_id']); ?>');">
                                          <i class="glyphicons glyphicons-circle_plus"></i>
                                      </button>
                                  </div>

                              </div>

                              <div class="row">

                                  <div class="section mb15 border-right">                                    
                                      <?php
                                      echo $this->Form->input(
                                        'tendencia', [
                                        'templates' => [
                                          'inputContainer' => '&nbsp;&nbsp;&nbsp;Tendencia&nbsp; {{content}}',
                                          'radio' => '<input type="radio" name="{{name}}" value="{{value}}"{{attrs}}><span class="radio"></span>{{value}}',
                                          'radioWrapper' => '<label class="option">{{input}}</label>'
                                        ],
                                        'options' => [
                                          ['value' => 'Positivo', 'text' => 'Positivo'],
                                          ['value' => 'Negativo', 'text' => 'Negativo'],
                                          ['value' => 'Neutro', 'text' => 'Neutro']
                                        ],
                                        'type' => 'radio',
                                        'label' => FALSE
                                        ]
                                      );
                                      ?>
                                  </div>

                              </div>     
                          </div>

                        <?php endif; ?>

                        <?php if ($noticia->tipo == 'Digital'): ?>
                          <div id="formDigital">
                              <div class="section-divider mb40" id="spy1">
                                  <span>DIGITAL</span>
                              </div>

                              <!-- Input Formats -->
                              <div class="row">
                                  <div class="col-md-5">
                                      <?php //debug($dcm->all());     ?>
                                      <div id="divseldig">
                                          <?php echo $this->Form->select("medio_id", $dcmd, ['class' => 'form-control', 'empty' => 'Seleccione Medio']); ?>                                              
                                      </div>
                                  </div>
                                  <?= $this->Form->hidden("tipo_id", ['value' => 'Digital']) ?>
                                  <div class="col-md-1">                                   
                                      <button type="button" class="btn btn-primary" onclick="cargarmodal('<?php echo $this->Url->build(['controller' => 'Medios', 'action' => 'ajaxformedio', 'Digital', 'divseldig', 'medio_id']); ?>');">
                                          <i class="glyphicons glyphicons-circle_plus"></i>
                                      </button>
                                  </div>

                                  <div class="col-md-3">
                                      <div class="section">
                                          <label class="field prepend-icon">
                                              <?= $this->Form->text("seccion", ['id' => 'email', 'class' => 'gui-input', 'placeholder' => 'Seccion']) ?>
                                              <label for="email" class="field-icon"><i class="fa fa-envelope"></i>
                                              </label>
                                          </label>
                                      </div>
                                  </div>                                
                                  <div class="col-md-3">
                                      <div class="section">
                                          <label class="field prepend-icon">
                                              <?= $this->Form->text("pagina", ['id' => 's', 'class' => 'gui-input', 'placeholder' => 'Pagina']) ?>
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
                                              <?= $this->Form->text("titulo", ['id' => 'firstname', 'class' => 'gui-input', 'placeholder' => 'Titulo']) ?>
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
                                              <?= $this->Form->text("web", ['id' => 'firstname', 'class' => 'gui-input', 'placeholder' => 'Web']) ?>
                                              <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                              </label>
                                          </label>
                                      </div>
                                  </div>

                                  <div class="col-md-4">
                                      <div class="section">
                                          <label class="field prepend-icon">
                                              <?= $this->Form->text("genero", ['id' => 'genero', 'class' => 'gui-input', 'placeholder' => 'Genero']) ?>
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
                              <?php foreach ($adjuntos_n as $key => $ad): ?>
                                <?php $num = $key + 1; ?>
                                <script>
                                  vec_file[1]++;
                                </script>
                                <div class="row" id="darchivo-0-<?= $num ?>">
                                    <div class="col-md-12">
                                        <div class="section">

                                            <?php if (!empty($ad->url_ext)): ?>
                                              <?php $url = $ad->url_ext; ?>
                                              <?= $this->Form->hidden("data.1.adjuntos.$num.url", ['value' => $ad->url_ext]); ?>
                                            <?php else: ?>
                                              <?= $this->Form->hidden("data.1.adjuntos.$num.url_int", ['value' => $ad->url_int]); ?>
                                              <?php $url = $this->request->webroot . 'adjuntos/' . $ad->url_int; ?>
                                            <?php endif; ?>
                                            <a class="label label-primary" href="<?= $url ?>">
                                                <?= $url ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                              <?php endforeach; ?>

                              <!-- Text Areas -->
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="section">
                                          <label class="field prepend-icon">
                                              <?php echo $this->Form->textarea("descripcion", ['class' => 'gui-textarea', 'id' => 'comment', 'placeholder' => 'Descripcion']) ?>
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
                                                  <?php echo $this->Form->select("tema_id", $dct, ['class' => 'form-control', 'empty' => 'Seleccione Tema']); ?>                                                  
                                              </div>
                                          </label>                                        
                                      </div>
                                  </div>
                                  <div class="col-md-1">
                                      <button type="button" class="btn btn-primary" onclick="cargarmodal('<?php echo $this->Url->build(['controller' => 'Temas', 'action' => 'ajaxformtema', 'divselimptemad', 'tema_id']); ?>');">
                                          <i class="glyphicons glyphicons-circle_plus"></i>
                                      </button>
                                  </div>

                              </div>

                              <div class="row">

                                  <div class="section mb15 border-right">                                    
                                      <?php
                                      echo $this->Form->input(
                                        'tendencia', [
                                        'templates' => [
                                          'inputContainer' => '&nbsp;&nbsp;&nbsp;Tendencia&nbsp; {{content}}',
                                          'radio' => '<input type="radio" name="{{name}}" value="{{value}}"{{attrs}}><span class="radio"></span>{{value}}',
                                          'radioWrapper' => '<label class="option">{{input}}</label>'
                                        ],
                                        'options' => [
                                          ['value' => 'Positivo', 'text' => 'Positivo'],
                                          ['value' => 'Negativo', 'text' => 'Negativo'],
                                          ['value' => 'Neutro', 'text' => 'Neutro']
                                        ],
                                        'type' => 'radio',
                                        'label' => FALSE
                                        ]
                                      );
                                      ?>
                                  </div>

                              </div>  

                          </div>

                        <?php endif; ?>

                        <?php if ($noticia->tipo == 'Radio'): ?>
                          <div id="formRadio" >

                              <div class="section-divider mb40" id="spy1">
                                  <span>RADIO</span>
                              </div>

                              <!-- Input Formats -->
                              <div class="row">
                                  <div class="col-md-5">
                                      <?php //debug($dcm->all());     ?>
                                      <div id="divselrad">
                                          <?php echo $this->Form->select("medio_id", $dcmr, ['class' => 'form-control', 'empty' => 'Seleccione el medio']); ?>
                                          <?= $this->Form->hidden("tipo_id", ['value' => 'Radio']); ?>
                                      </div>
                                  </div>
                                  <div class="col-md-1">                                   
                                      <button type="button" class="btn btn-primary" onclick="cargarmodal('<?php echo $this->Url->build(['controller' => 'Medios', 'action' => 'ajaxformedio', 'Radio', 'divselrad','medio_id']); ?>');">
                                          <i class="glyphicons glyphicons-circle_plus"></i>
                                      </button>
                                  </div>

                                  <div class="col-md-3">
                                      <div class="section">
                                          <label class="field prepend-icon">
                                              <?= $this->Form->text("fuente", ['id' => 'email', 'class' => 'gui-input', 'placeholder' => 'Fuente']) ?>
                                              <label for="email" class="field-icon"><i class="fa fa-envelope"></i>
                                              </label>
                                          </label>
                                      </div>
                                  </div>                                
                                  <div class="col-md-3">
                                      <div class="section">
                                          <label class="field prepend-icon">
                                              <?= $this->Form->text("alias", ['id' => 's', 'class' => 'gui-input', 'placeholder' => 'Alias']) ?>
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
                                              <?= $this->Form->text("titulo", ['id' => 'firstname', 'class' => 'gui-input', 'placeholder' => 'Titulo']) ?>
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
                                              <?= $this->Form->text("riesgo", ['id' => 'firstname', 'class' => 'gui-input', 'placeholder' => 'Riesgo Comunicacional']) ?>
                                              <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                              </label>
                                          </label>
                                      </div>
                                  </div>

                                  <div class="col-md-4">
                                      <div class="section">
                                          <label class="field prepend-icon">
                                              <?= $this->Form->text("programa", ['id' => 'firstname', 'class' => 'gui-input', 'placeholder' => 'Programa']) ?>
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
                              
                              <?php foreach ($adjuntos_n as $key => $ad): ?>
                                <?php $num = $key + 1; ?>
                                <script>
                                  vec_file[2]++;
                                </script>
                                <div class="row" id="darchivo-0-<?= $num ?>">
                                    <div class="col-md-12">
                                        <div class="section">

                                            <?php if (!empty($ad->url_ext)): ?>
                                              <?php $url = $ad->url_ext; ?>
                                              <?= $this->Form->hidden("data.2.adjuntos.$num.url", ['value' => $ad->url_ext]); ?>
                                            <?php else: ?>
                                              <?= $this->Form->hidden("data.2.adjuntos.$num.url_int", ['value' => $ad->url_int]); ?>
                                              <?php $url = $this->request->webroot . 'adjuntos/' . $ad->url_int; ?>
                                            <?php endif; ?>
                                            <a class="label label-primary" href="<?= $url ?>">
                                                <?= $url ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                              <?php endforeach; ?>
                              
                              <!-- Text Areas -->
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="section">
                                          <label class="field prepend-icon">
                                              <?php echo $this->Form->textarea("descripcion", ['class' => 'gui-textarea', 'id' => 'comment', 'placeholder' => 'Descripcion']) ?>
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
                                                  <?php echo $this->Form->select("tema_id", $dct, ['class' => 'form-control', 'empty' => 'Seleccione Tema']); ?>                                              
                                              </div>
                                          </label>                                        
                                      </div>
                                  </div>
                                  <div class="col-md-1">
                                      <button type="button" class="btn btn-primary" onclick="cargarmodal('<?php echo $this->Url->build(['controller' => 'Temas', 'action' => 'ajaxformtema', 'divselimptemar', 'tema_id']); ?>');">
                                          <i class="glyphicons glyphicons-circle_plus"></i>
                                      </button>
                                  </div>

                              </div>

                              <div class="row">

                                  <div class="section mb15 border-right">  
                                      <?php
                                      echo $this->Form->input(
                                        'tendencia', [
                                        'templates' => [
                                          'inputContainer' => '&nbsp;&nbsp;&nbsp;Tendencia&nbsp; {{content}}',
                                          'radio' => '<input type="radio" name="{{name}}" value="{{value}}"{{attrs}}><span class="radio"></span>{{value}}',
                                          'radioWrapper' => '<label class="option">{{input}}</label>'
                                        ],
                                        'options' => [
                                          ['value' => 'Positivo', 'text' => 'Positivo'],
                                          ['value' => 'Negativo', 'text' => 'Negativo'],
                                          ['value' => 'Neutro', 'text' => 'Neutro']
                                        ],
                                        'type' => 'radio',
                                        'label' => FALSE
                                        ]
                                      );
                                      ?>
                                      <!-- end .option-group section -->
                                  </div>

                              </div>     

                          </div>

                        <?php endif; ?>

                        <?php if ($noticia->tipo == 'Tv'): ?>
                          <div id="formTv">
                              <div class="section-divider mb40" id="spy1">
                                  <span>TV</span>
                              </div>

                              <!-- Input Formats -->
                              <div class="row">
                                  <div class="col-md-5">
                                      <?php //debug($dcm->all());     ?>
                                      <div id="divseltv">
                                          <?php echo $this->Form->select("medio_id", $dcmt, ['class' => 'form-control', 'empty' => 'Seleccione el medio']); ?>
                                          <?= $this->Form->hidden("tipo_id", ['value' => 'Tv']); ?>
                                      </div>
                                  </div>
                                  <div class="col-md-1">                                   
                                      <button type="button" class="btn btn-primary" onclick="cargarmodal('<?php echo $this->Url->build(['controller' => 'Medios', 'action' => 'ajaxformedio', 'Tv', 'divseltv', 'medio_id']); ?>');">
                                          <i class="glyphicons glyphicons-circle_plus"></i>
                                      </button>
                                  </div>

                                  <div class="col-md-3">
                                      <div class="section">
                                          <label class="field prepend-icon">
                                              <?= $this->Form->text("fuente", ['id' => 'email', 'class' => 'gui-input', 'placeholder' => 'Fuente']) ?>
                                              <label for="email" class="field-icon"><i class="fa fa-envelope"></i>
                                              </label>
                                          </label>
                                      </div>
                                  </div>                                
                                  <div class="col-md-3">
                                      <div class="section">
                                          <label class="field prepend-icon">
                                              <?= $this->Form->text("alias", ['id' => 's', 'class' => 'gui-input', 'placeholder' => 'Alias']) ?>
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
                                              <?= $this->Form->text("titulo", ['id' => 'firstname', 'class' => 'gui-input', 'placeholder' => 'Titulo']) ?>
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
                                              <?= $this->Form->text("riesgo", ['id' => 'firstname', 'class' => 'gui-input', 'placeholder' => 'Riesgo Comunicacional']) ?>
                                              <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                              </label>
                                          </label>
                                      </div>
                                  </div>

                                  <div class="col-md-4">
                                      <div class="section">
                                          <label class="field prepend-icon">
                                              <?= $this->Form->text("programa", ['id' => 'firstname', 'class' => 'gui-input', 'placeholder' => 'Programa']) ?>
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
                              <?php foreach ($adjuntos_n as $key => $ad): ?>
                                <?php $num = $key + 1; ?>
                                <script>
                                  vec_file[3]++;
                                </script>
                                <div class="row" id="darchivo-0-<?= $num ?>">
                                    <div class="col-md-12">
                                        <div class="section">

                                            <?php if (!empty($ad->url_ext)): ?>
                                              <?php $url = $ad->url_ext; ?>
                                              <?= $this->Form->hidden("data.3.adjuntos.$num.url", ['value' => $ad->url_ext]); ?>
                                            <?php else: ?>
                                              <?= $this->Form->hidden("data.3.adjuntos.$num.url_int", ['value' => $ad->url_int]); ?>
                                              <?php $url = $this->request->webroot . 'adjuntos/' . $ad->url_int; ?>
                                            <?php endif; ?>
                                            <a class="label label-primary" href="<?= $url ?>">
                                                <?= $url ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                              <?php endforeach; ?>

                              <!-- Text Areas -->
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="section">
                                          <label class="field prepend-icon">
                                              <?php echo $this->Form->textarea("descripcion", ['class' => 'gui-textarea', 'id' => 'comment', 'placeholder' => 'Descripcion']) ?>
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
                                                  <?php echo $this->Form->select("tema_id", $dct, ['class' => 'form-control', 'empty' => 'Seleccione Tema']); ?>
                                                                                                  
                                              </div>
                                          </label>                                        
                                      </div>
                                  </div>
                                  <div class="col-md-1">
                                      <button type="button" class="btn btn-primary" onclick="cargarmodal('<?php echo $this->Url->build(['controller' => 'Temas', 'action' => 'ajaxformtema', 'divselimptemat', 'tema_id']); ?>');">
                                          <i class="glyphicons glyphicons-circle_plus"></i>
                                      </button>
                                  </div>

                              </div>

                              <div class="row">

                                  <div class="section mb15 border-right">         
                                      <?php
                                      echo $this->Form->input(
                                        'tendencia', [
                                        'templates' => [
                                          'inputContainer' => '&nbsp;&nbsp;&nbsp;Tendencia&nbsp; {{content}}',
                                          'radio' => '<input type="radio" name="{{name}}" value="{{value}}"{{attrs}}><span class="radio"></span>{{value}}',
                                          'radioWrapper' => '<label class="option">{{input}}</label>'
                                        ],
                                        'options' => [
                                          ['value' => 'Positivo', 'text' => 'Positivo'],
                                          ['value' => 'Negativo', 'text' => 'Negativo'],
                                          ['value' => 'Neutro', 'text' => 'Neutro']
                                        ],
                                        'type' => 'radio',
                                        'label' => FALSE
                                        ]
                                      );
                                      ?>
                                  </div>

                              </div>    

                          </div>
                        <?php endif; ?>

                        <?php if ($noticia->tipo == 'Fuente'): ?>
                          <div id="formFuente">
                              <div class="section-divider mb40" id="spy1">
                                  <span>FUENTE</span>
                              </div>

                              <!-- Input Formats -->
                              <div class="row">
                                  <div class="col-md-10">
                                      <?php //debug($dcm->all());     ?>
                                      <div id="divselfue">
                                          <?php echo $this->Form->select("medio_id", $dcmf, ['class' => 'form-control', 'empty' => 'Seleccione el medio']); ?>
                                          <?= $this->Form->hidden("tipo_id", ['value' => 'Fuente']); ?>
                                      </div>
                                  </div>
                                  <div class="col-md-2">                                   
                                      <button type="button" class="btn btn-primary" onclick="cargarmodal('<?php echo $this->Url->build(['controller' => 'Medios', 'action' => 'ajaxformedio', 'Fuente', 'divselfue', 'medio_id']); ?>');">
                                          <i class="glyphicons glyphicons-circle_plus"></i>
                                      </button>
                                  </div>                                

                              </div>
                              <p>&nbsp;</p>

                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="section">
                                          <label class="field prepend-icon">
                                              <?= $this->Form->text("titlulo", ['id' => 'firstname', 'class' => 'gui-input', 'placeholder' => 'Titulo']) ?>
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
                                              <?= $this->Form->text("fuente", ['id' => 'firstname', 'class' => 'gui-input', 'placeholder' => 'Fuente']) ?>
                                              <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                              </label>
                                          </label>
                                      </div>
                                  </div>
                                  <div class="col-md-8">
                                      <div class="section">
                                          <label class="field prepend-icon">
                                              <?= $this->Form->text("alias", ['id' => 'firstname', 'class' => 'gui-input', 'placeholder' => 'Alias']) ?>
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
                              
                              <?php foreach ($adjuntos_n as $key => $ad): ?>
                                <?php $num = $key + 1; ?>
                                <script>
                                  vec_file[4]++;
                                </script>
                                <div class="row" id="darchivo-0-<?= $num ?>">
                                    <div class="col-md-12">
                                        <div class="section">

                                            <?php if (!empty($ad->url_ext)): ?>
                                              <?php $url = $ad->url_ext; ?>
                                              <?= $this->Form->hidden("data.4.adjuntos.$num.url", ['value' => $ad->url_ext]); ?>
                                            <?php else: ?>
                                              <?= $this->Form->hidden("data.4.adjuntos.$num.url_int", ['value' => $ad->url_int]); ?>
                                              <?php $url = $this->request->webroot . 'adjuntos/' . $ad->url_int; ?>
                                            <?php endif; ?>
                                            <a class="label label-primary" href="<?= $url ?>">
                                                <?= $url ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                              <?php endforeach; ?>

                              <!-- Text Areas -->
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="section">
                                          <label class="field prepend-icon">
                                              <?php echo $this->Form->textarea("descripcion", ['class' => 'gui-textarea', 'id' => 'comment', 'placeholder' => 'Descripcion']) ?>
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
                                                  <?php echo $this->Form->select("tema_id", $dct, ['class' => 'form-control', 'empty' => 'Seleccione Tema']); ?>                                                
                                              </div>
                                          </label>                                        
                                      </div>
                                  </div>
                                  <div class="col-md-1">
                                      <button type="button" class="btn btn-primary" onclick="cargarmodal('<?php echo $this->Url->build(['controller' => 'Temas', 'action' => 'ajaxformtema', 'divselimptemaf', 'tema_id']); ?>');">
                                          <i class="glyphicons glyphicons-circle_plus"></i>
                                      </button>
                                  </div>

                              </div>

                              <div class="row">
                                  <div class="section mb15 border-right"> 
                                      <?php
                                      echo $this->Form->input(
                                        'tendencia', [
                                        'templates' => [
                                          'inputContainer' => '&nbsp;&nbsp;&nbsp;Tendencia&nbsp; {{content}}',
                                          'radio' => '<input type="radio" name="{{name}}" value="{{value}}"{{attrs}}><span class="radio"></span>{{value}}',
                                          'radioWrapper' => '<label class="option">{{input}}</label>'
                                        ],
                                        'options' => [
                                          ['value' => 'Positivo', 'text' => 'Positivo'],
                                          ['value' => 'Negativo', 'text' => 'Negativo'],
                                          ['value' => 'Neutro', 'text' => 'Neutro']
                                        ],
                                        'type' => 'radio',
                                        'label' => FALSE
                                        ]
                                      );
                                      ?>
                                  </div>
                              </div>     

                          </div>
                        <?php endif; ?>

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

<?php
echo $this->Html->script([
  'utility/utility',
  'main',
  'demo',
  'vendor/plugins/moment/moment.min',
  'vendor/plugins/daterange/daterangepicker',
  'vendor/plugins/datepicker/js/bootstrap-datetimepicker',
  'vendor/plugins/select2/select2.min',
  'datepicker_edit_not',
  'cambiaColorForm'
  ], ['block' => 'scriptjs']);
?>

<script>
// Init DateRange plugin


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