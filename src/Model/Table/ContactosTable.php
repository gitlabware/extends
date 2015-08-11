<?php
namespace App\Model\Table;

use App\Model\Entity\Contacto;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contactos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Clientes
 * @property \Cake\ORM\Association\BelongsTo $Medios
 */
class ContactosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('contactos');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('Clientes', [
            'foreignKey' => 'cliente_id'
        ]);
        $this->belongsTo('Medios', [
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
            ->allowEmpty('cargo');
            
        $validator
            ->add('email', 'valid', ['rule' => 'email'])
            ->allowEmpty('email');
            
        $validator
            ->allowEmpty('tipo');
            
        $validator
            ->allowEmpty('celular');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['cliente_id'], 'Clientes'));
        $rules->add($rules->existsIn(['medio_id'], 'Medios'));
        return $rules;
    }
}
