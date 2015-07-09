<select name="cliente_id" class="form-control" name="ciudad_id">
    <option value="0">Seleccione Tema</option>
    <?php foreach ($dct as $t): ?>
      <option value="<?php echo $t['id']; ?>"><?php echo $t['nombre']; ?></option>                                                                                        
    <?php endforeach; ?>
</select>