<script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?= $this->request->webroot; ?>js/vendor/plugins/select2/css/core.css">
<select name="clientes[]" class="select2-multiple form-control select-primary" placeholder="Clientes" multiple="multiple">
    <?php foreach ($dcc as $c): ?>
      <option value="<?= $c['id']; ?>"><?= $c['nombre']; ?></option>
    <?php endforeach; ?>
</select>
<script src="<?= $this->request->webroot; ?>js/vendor/plugins/select2/select2.min.js"></script>
<script>
  // Init Select2 - Basic Multiple
  $(".select2-multiple").select2({
      placeholder: "Seleccione cliente",
      allowClear: true
  });
</script>