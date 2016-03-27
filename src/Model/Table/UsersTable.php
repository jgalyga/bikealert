<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \Cake\ORM\Association\HasMany $Bikes
 */
class UsersTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('users');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Adress', [
            'foreignKey' => 'user_id',
            'className' => 'Panel.Adress'
        ]);
        $this->hasMany('Bikes', [
            'foreignKey' => 'user_id',
            'className' => 'Panel.Bikes'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator) {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->notEmpty('email', __('Prosze podać adres e-mail.'))
            ->add('email', 'valid', ['rule' => 'email', 'message' => __('Prosze podać adres e-mail.')])
            ->add('email', ['unique' => ['rule' => 'validateUnique', 'provider' => 'table', 'message' => __('Adres e-mail już istnieje w naszym systemie.')]])
            ->requirePresence('email');

        $validator
            ->add('password', 'length', ['rule' => ['minLength', 6], 'message' => __('Hasło musi mieć minimum 6 znaków.')])
            ->requirePresence('password', 'create')
            ->notEmpty('password', __('Proszę podać hasło.'));

        $validator
            ->add('phone', 'length', ['rule' => ['minLength', 9], 'message' => __('Numer telefonu jest nieprawidłowy.')]);


        $validator->add('repassword', 'compareWith', [
            'rule' => ['compareWith', 'password'],
            'message' => 'Podane hasła nie są takie same.'
        ])
            ->notEmpty('phone', 'Proszę powtórzyć hasło.');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules) {
        $rules->add($rules->isUnique(['email']));
        return $rules;
    }

}
