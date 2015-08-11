<aside id="sidebar_left" class="nano nano-primary">
    <div class="nano-content">

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