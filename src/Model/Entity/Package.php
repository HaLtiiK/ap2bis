<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Package Entity
 *
 * @property int $id
 * @property string $nom
 * @property string $description
 * @property string $durer
 * @property \Cake\I18n\FrozenDate $created_at
 * @property \Cake\I18n\FrozenDate $updated_at
 * @property string $prix
 *
 * @property \App\Model\Entity\Reservation[] $reservations
 */
class Package extends Entity
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
        'nom' => true,
        'description' => true,
        'durer' => true,
        'created_at' => true,
        'updated_at' => true,
        'prix' => true,
        'reservations' => true,
    ];
}
