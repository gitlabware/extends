<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Medio Entity.
 */
class Medio extends Entity {

  /**
   * Fields that can be mass assigned using newEntity() or patchEntity().
   *
   * @var array
   */
  protected $_accessible = [
    'nombre' => true,
    'descripcion' => true,
    'ciudad' => true,
    'url' => true,
    'tipo' => true,
    'noticias' => true,
  ];

  protected function _getNombreCiudad($nombre) {
    return $this->_properties['nombre'] . '  (' .
      $this->_properties['ciudad'].')';
  }

}
