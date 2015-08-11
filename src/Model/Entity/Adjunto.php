<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Adjunto Entity.
 */
class Adjunto extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'noticia_id' => true,
        'url_ext' => true,
        'url_int' => true,
        'noticia' => true,
    ];
}
