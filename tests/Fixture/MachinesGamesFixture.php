<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MachinesGamesFixture
 */
class MachinesGamesFixture extends TestFixture
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
                'game_id' => 1,
                'created_at' => '2024-11-14',
            ],
        ];
        parent::init();
    }
}
