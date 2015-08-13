<?php echo $this->Form->select('cliente_id', $l_clientes, ['class' => 'select2-multiple form-control select-primary','value' => $idCliente]); ?>  

<script>
$(".select2-multiple").select2({
      placeholder: "Seleccione cliente",
      allowClear: true
  });
</script>