<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PackagesFixture
 */
class PackagesFixture extends TestFixture
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
                'nom' => 'Lorem ipsum d',
                'description' => 'Lorem ipsum dolor sit amet',
                'durer' => 'Lorem ipsum dolor ',
                'created_at' => '2024-11-14',
                'updated_at' => '2024-11-14',
                'prix' => 'Lorem ipsum d',
            ],
        ];
        parent::init();
    }
}
