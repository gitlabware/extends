<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity.
 */
class Cliente extends Entity {

  /**
   * Fields that can be mass assigned using newEntity() or patchEntity().
   *
   * @var array
   */
  protected $_accessible = [
    'nombre' => true,
    'telefono' => true,
    'descripcion' => true,
    'direccion' => true,
    'ciudad' => true,
    'web' => true,
  ];

  

}
