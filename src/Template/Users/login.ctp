<!--<form method="post" action="/" id="contact">-->
<?php //echo $this->Form->create('User'); ?>
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create(); ?>
<div class="panel-body bg-light p30">
    <div class="row">
        <div class="col-sm-7 pr30">            

            <div class="section">
                <label for="username" class="field-label text-muted fs18 mb10">Usuario</label>
                <label for="username" class="field prepend-icon">
                    <input type="text" name="username" id="username" class="gui-input" placeholder="">
                    <label for="username" class="field-icon">
                        <i class="fa fa-user"></i>
                    </label>
                </label>
            </div>
            <!-- end section -->

            <div class="section">
                <label for="username" class="field-label text-muted fs18 mb10">Password</label>
                <label for="password" class="field prepend-icon">
                    <input type="password" name="password" id="password" class="gui-input" placeholder="">                   
                    <label for="password" class="field-icon">
                        <i class="fa fa-lock"></i>
                    </label>
                </label>
            </div>
            <!-- end section -->

        </div>
        <div class="col-sm-5 br-l br-grey pl30">
            <h3 class="mb25"> Ingrese sus Datos:</h3>
            <p class="mb15">
                <span class="fa fa-check text-success pr5"></span> Nombre de Usuario</p>
            <p class="mb15">
                <span class="fa fa-check text-success pr5"></span> Password de Acceos</p>                    
        </div>
    </div>
</div>
<!-- end .form-body section -->
<div class="panel-footer clearfix p10 ph15">
    <button type="submit" class="button btn-primary mr10 pull-right">Ingresar</button>

</div>
<!-- end .form-footer section -->
</form>