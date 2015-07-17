<?php
namespace App\Model\Table;

use App\Model\Entity\Medio;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Medios Model
 *
 * @property \Cake\ORM\Association\HasMany $Noticias
 */
class MediosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('medios');
        $this->displayField('nombre');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->hasMany('Noticias', [
            'foreignKey' => 'medio_id'
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
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');
            
        $validator
            ->allowEmpty('descripcion');
            
        $validator
            ->requirePresence('ciudad', 'create')
            ->notEmpty('ciudad');
            
        $validator
            ->allowEmpty('url');
            
        $validator
            ->allowEmpty('tipo');

        return $validator;
    }
}
