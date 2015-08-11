<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Noticia Entity.
 */
class Noticia extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'tema_id' => true,
        'cliente_id' => true,
        'tipo' => true,
        'medio_id' => true,
        'fecha' => true,
        'notaprensa' => true,
        'codigo' => true,
        'clasificacion' => true,
        'seccion' => true,
        'pagina' => true,
        'titulo' => true,
        'genero' => true,
        'web' => true,
        'fuente' => true,
        'alias' => true,
        'riesgo' => true,
        'formato' => true,
        'nombrearchivo' => true,
        'descripcion' => true,
        'tendencia' => true,
        'longitud' => true,
        'costo' => true,
        'medio' => true,
        'tema' => true,
        'cliente' => true,
    ];
}
