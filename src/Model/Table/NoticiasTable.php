<?php
namespace App\Model\Table;

use App\Model\Entity\Noticia;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Noticias Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Medios
 * @property \Cake\ORM\Association\BelongsTo $Temas
 * @property \Cake\ORM\Association\BelongsTo $Clientes
 */
class NoticiasTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('noticias');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('Medios', [
            'foreignKey' => 'medio_id'
        ]);
        $this->belongsTo('Temas', [
            'foreignKey' => 'tema_id'
        ]);
        $this->belongsTo('Clientes', [
            'foreignKey' => 'cliente_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');
            
        $validator
            ->allowEmpty('tipo');
            
        $validator
            ->add('fecha', 'valid', ['rule' => 'date'])
            ->requirePresence('fecha', 'create')
            ->notEmpty('fecha');
            
        $validator
            ->allowEmpty('notaprensa');
            
        $validator
            ->allowEmpty('codigo');
            
        $validator
            ->allowEmpty('clasificacion');
            
        $validator
            ->allowEmpty('seccion');
            
        $validator
            ->allowEmpty('pagina');
            
        $validator
            ->allowEmpty('titulo');
            
        $validator
            ->allowEmpty('genero');
            
        $validator
            ->allowEmpty('web');
            
        $validator
            ->allowEmpty('fuente');
            
        $validator
            ->allowEmpty('alias');
            
        $validator
            ->allowEmpty('riesgo');
            
        $validator
            ->allowEmpty('formato');
            
        $validator
            ->allowEmpty('nombrearchivo');
            
        $validator
            ->allowEmpty('descripcion');
            
        $validator
            ->allowEmpty('tendencia');
            
        $validator
            ->allowEmpty('longitud');
            
        $validator
            ->requirePresence('costo', 'create')
            ->notEmpty('costo');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['medio_id'], 'Medios'));
        $rules->add($rules->existsIn(['tema_id'], 'Temas'));
        $rules->add($rules->existsIn(['cliente_id'], 'Clientes'));
        return $rules;
    }
}
