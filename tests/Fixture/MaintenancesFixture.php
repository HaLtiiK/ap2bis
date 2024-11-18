<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MaintenancesFixture
 */
class MaintenancesFixture extends TestFixture
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
                'machine_id' => 1,
                'date_maintenance' => '2024-11-14',
                'description' => 'Lorem ipsum dolor sit amet',
                'created_at' => '2024-11-14',
                'updated_at' => '2024-11-14',
            ],
        ];
        parent::init();
    }
}
