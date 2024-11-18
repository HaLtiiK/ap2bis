<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MachinesFixture
 */
class MachinesFixture extends TestFixture
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
                'nom' => 'Lorem ipsum dolor sit amet',
                'processeur' => 'Lorem ipsum dolor sit amet',
                'memoire' => 'Lorem ipsum dolor sit amet',
                'os' => 'Lorem ipsum dolor sit amet',
                'disponibilite' => 'Lorem ipsum dolor sit amet',
                'date_achat' => '2024-11-14',
                'created_at' => '2024-11-14',
                'updated_at' => '2024-11-14',
            ],
        ];
        parent::init();
    }
}
