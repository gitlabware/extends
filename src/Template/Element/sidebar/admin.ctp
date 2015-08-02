<aside id="sidebar_left" class="nano nano-primary">
    <div class="nano-content">

        <!-- Start: Sidebar Header -->
        <header class="sidebar-header">
            <div class="user-menu">
                <div class="row text-center mbn">
                    <div class="col-xs-4">
                        <a href="dashboard.html" class="text-primary" data-toggle="tooltip" data-placement="top" title="Dashboard">
                            <span class="glyphicons glyphicons-home"></span>
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href="pages_messages.html" class="text-info" data-toggle="tooltip" data-placement="top" title="Messages">
                            <span class="glyphicons glyphicons-inbox"></span>
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href="pages_profile.html" class="text-alert" data-toggle="tooltip" data-placement="top" title="Tasks">
                            <span class="glyphicons glyphicons-bell"></span>
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href="pages_timeline.html" class="text-system" data-toggle="tooltip" data-placement="top" title="Activity">
                            <span class="glyphicons glyphicons-imac"></span>
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href="pages_profile.html" class="text-danger" data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicons glyphicons-settings"></span>
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href="pages_gallery.html" class="text-warning" data-toggle="tooltip" data-placement="top" title="Cron Jobs">
                            <span class="glyphicons glyphicons-restart"></span>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <!-- End: Sidebar Header -->

        <!-- sidebar menu -->
        <ul class="nav sidebar-menu">
            <li class="sidebar-label pt20">Noticias</li>
            
            <li>
                <a href="<?= $this->url->build(['controller'=>'Noticias', 'action'=>'listado']); ?>">
                    <span class="glyphicons glyphicons-list"></span>
                    <span class="sidebar-title">Listado General</span>
                </a>
            </li>  
            
            <li>
               <a href="<?= $this->url->build(['controller'=>'Noticias', 'action'=>'add']); ?>">
                    <span class="glyphicons glyphicons-circle_plus"></span>
                    <span class="sidebar-title">Agregar Noticia</span>
                </a>
            </li>
            
            <li class="sidebar-label pt20">Clientes</li>
            
            <li>
                <a href="#<?php //$this->url->build(['controller'=>'Noticias', 'action'=>'listado']); ?>">
                    <span class="glyphicons glyphicons-list"></span>
                    <span class="sidebar-title">Listado General</span>
                </a>
            </li>  
            
            <li>
               <a href="<?= $this->url->build(['controller'=>'Clientes', 'action'=>'add']); ?>">
                    <span class="glyphicons glyphicons-circle_plus"></span>
                    <span class="sidebar-title">Agregar Cliente</span>
                </a>
            </li>
            
            <li class="sidebar-label pt20">Medios</li>
            
            <li>
                <a href="<?php //$this->url->build(['controller'=>'No', 'action'=>'listado']); ?>">
                    <span class="glyphicons glyphicons-list"></span>
                    <span class="sidebar-title">Listado General</span>
                </a>
            </li>  
            
            <li>
               <a href="<?= $this->url->build(['controller'=>'Medios', 'action'=>'add']); ?>">
                    <span class="glyphicons glyphicons-circle_plus"></span>
                    <span class="sidebar-title">Agregar Medio</span>
                </a>
            </li>
            
            <li class="sidebar-label pt20">Tema</li>
            
            <li>
                <a href="<?= $this->url->build(['controller'=>'Noticias', 'action'=>'listado']); ?>">
                    <span class="glyphicons glyphicons-list"></span>
                    <span class="sidebar-title">Listado General</span>
                </a>
            </li>  
            
            <li>
               <a href="<?= $this->url->build(['controller'=>'Noticias', 'action'=>'add']); ?>">
                    <span class="glyphicons glyphicons-circle_plus"></span>
                    <span class="sidebar-title">Agregar Tema</span>
                </a>
            </li>
            
           
        </ul>
        <div class="sidebar-toggle-mini">
            <a href="#">
                <span class="fa fa-sign-out"></span>
            </a>
        </div>
    </div>
</aside>