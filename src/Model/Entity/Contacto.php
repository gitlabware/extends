<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contacto Entity.
 */
class Contacto extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'nombre' => true,
        'cargo' => true,
        'email' => true,
        'tipo' => true,
        'celular' => true,
        'cliente_id' => true,
        'medio_id' => true,
        'cliente' => true,
        'medio' => true,
    ];
}
