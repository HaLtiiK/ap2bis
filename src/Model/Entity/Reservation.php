<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Reservation Entity
 *
 * @property int $id
 * @property string $user_id
 * @property int $machine_id
 * @property int $package_id
 * @property \Cake\I18n\FrozenDate $date_debut
 * @property \Cake\I18n\FrozenDate $date_fin
 * @property \Cake\I18n\FrozenDate $created_at
 * @property \Cake\I18n\FrozenDate $updated_at
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Machine $machine
 * @property \App\Model\Entity\Package $package
 */
class Reservation extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'user_id' => true,
        'machine_id' => true,
        'package_id' => true,
        'date_debut' => true,
        'date_fin' => true,
        'created_at' => true,
        'updated_at' => true,
        'user' => true,
        'machine' => true,
        'package' => true,
    ];
}
