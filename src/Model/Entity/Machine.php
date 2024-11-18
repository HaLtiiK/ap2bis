<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Machine Entity
 *
 * @property int $id
 * @property string $nom
 * @property string $processeur
 * @property string $memoire
 * @property string $os
 * @property string $disponibilite
 * @property \Cake\I18n\FrozenDate $date_achat
 * @property \Cake\I18n\FrozenDate $created_at
 * @property \Cake\I18n\FrozenDate $updated_at
 *
 * @property \App\Model\Entity\Maintenance[] $maintenances
 * @property \App\Model\Entity\Reservation[] $reservations
 * @property \App\Model\Entity\Game[] $games
 */
class Machine extends Entity
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
        'processeur' => true,
        'memoire' => true,
        'os' => true,
        'disponibilite' => true,
        'date_achat' => true,
        'created_at' => true,
        'updated_at' => true,
        'maintenances' => true,
        'reservations' => true,
        'games' => true,
    ];
}
