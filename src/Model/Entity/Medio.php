<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Medio Entity.
 */
class Medio extends Entity
{

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
}
