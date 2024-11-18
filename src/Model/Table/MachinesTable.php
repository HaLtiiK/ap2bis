<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Machines Model
 *
 * @property \App\Model\Table\MaintenancesTable&\Cake\ORM\Association\HasMany $Maintenances
 * @property \App\Model\Table\ReservationsTable&\Cake\ORM\Association\HasMany $Reservations
 * @property \App\Model\Table\GamesTable&\Cake\ORM\Association\BelongsToMany $Games
 *
 * @method \App\Model\Entity\Machine newEmptyEntity()
 * @method \App\Model\Entity\Machine newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Machine[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Machine get($primaryKey, $options = [])
 * @method \App\Model\Entity\Machine findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Machine patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Machine[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Machine|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Machine saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Machine[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Machine[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Machine[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Machine[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MachinesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('machines');
        $this->setDisplayField('nom');
        $this->setPrimaryKey('id');

        $this->hasMany('Maintenances', [
            'foreignKey' => 'machine_id',
        ]);
        $this->hasMany('Reservations', [
            'foreignKey' => 'machine_id',
        ]);
        $this->belongsToMany('Games', [
            'foreignKey' => 'machine_id',
            'targetForeignKey' => 'game_id',
            'joinTable' => 'machines_games',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('nom')
            ->maxLength('nom', 50)
            ->requirePresence('nom', 'create')
            ->notEmptyString('nom');

        $validator
            ->scalar('processeur')
            ->maxLength('processeur', 400)
            ->requirePresence('processeur', 'create')
            ->notEmptyString('processeur');

        $validator
            ->scalar('memoire')
            ->maxLength('memoire', 400)
            ->requirePresence('memoire', 'create')
            ->notEmptyString('memoire');

        $validator
            ->scalar('os')
            ->maxLength('os', 50)
            ->requirePresence('os', 'create')
            ->notEmptyString('os');

        $validator
            ->scalar('disponibilite')
            ->requirePresence('disponibilite', 'create')
            ->notEmptyString('disponibilite');

        $validator
            ->date('date_achat')
            ->requirePresence('date_achat', 'create')
            ->notEmptyDate('date_achat');

        $validator
            ->date('created_at')
            ->requirePresence('created_at', 'create')
            ->notEmptyDate('created_at');

        $validator
            ->date('updated_at')
            ->requirePresence('updated_at', 'create')
            ->notEmptyDate('updated_at');

        return $validator;
    }
}
