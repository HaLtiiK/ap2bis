<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ReservationsFixture
 */
class ReservationsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'user_id' => '9f0de250-b830-41f8-b21d-2ac2839894bf',
                'machine_id' => 1,
                'package_id' => 1,
                'date_debut' => '2024-11-14',
                'date_fin' => '2024-11-14',
                'created_at' => '2024-11-14',
                'updated_at' => '2024-11-14',
            ],
        ];
        parent::init();
    }
}
