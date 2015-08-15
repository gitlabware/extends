<?php
namespace App\Model\Table;

use App\Model\Entity\Contactosboletine;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contactosboletines Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Contactos
 */
class ContactosboletinesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('contactosboletines');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('Contactos', [
            'foreignKey' => 'contacto_id',
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
            ->add('estado', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('estado');
            
        $validator
            ->add('enviado', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('enviado');
            
        $validator
            ->add('numero', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('numero');

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
        $rules->add($rules->existsIn(['contacto_id'], 'Contactos'));
        return $rules;
    }
}
