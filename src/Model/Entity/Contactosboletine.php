<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contactosboletine Entity.
 */
class Contactosboletine extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'contacto_id' => true,
        'boletine_id' => true,
        'estado' => true,
        'contacto' => true,
        'boletine' => true,
    ];
}
