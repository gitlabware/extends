<select name="cliente_id" class="form-control" name="ciudad_id">
    <option value="0">Seleccione Medio</option>
    <?php foreach ($dcm as $d): ?>
      <option value="<?php echo $d['id']; ?>"><?php echo $d['nombre']; ?> (<?php echo $d['ciudad']; ?>)</option>                                                                                        
    <?php endforeach; ?>
</select>