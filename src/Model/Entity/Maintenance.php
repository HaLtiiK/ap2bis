<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Maintenance Entity
 *
 * @property int $id
 * @property int $machine_id
 * @property \Cake\I18n\FrozenDate $date_maintenance
 * @property string $description
 * @property \Cake\I18n\FrozenDate $created_at
 * @property \Cake\I18n\FrozenDate $updated_at
 *
 * @property \App\Model\Entity\Machine $machine
 */
class Maintenance extends Entity
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
        'machine_id' => true,
        'date_maintenance' => true,
        'description' => true,
        'created_at' => true,
        'updated_at' => true,
        'machine' => true,
    ];
}
