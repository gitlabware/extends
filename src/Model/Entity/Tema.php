<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tema Entity.
 */
class Tema extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'nombre' => true,
        'descripcion' => true,
        'noticias' => true,
    ];
}
