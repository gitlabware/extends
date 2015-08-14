<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Boletine Entity.
 */
class Boletine extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'numero' => true,
        'cliente_id' => true,
        'cliente' => true,
        'contactosboletines' => true,
    ];
}
