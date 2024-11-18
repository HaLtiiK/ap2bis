<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MachinesGamesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MachinesGamesTable Test Case
 */
class MachinesGamesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MachinesGamesTable
     */
    protected $MachinesGames;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.MachinesGames',
        'app.Machines',
        'app.Games',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('MachinesGames') ? [] : ['className' => MachinesGamesTable::class];
        $this->MachinesGames = $this->getTableLocator()->get('MachinesGames', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->MachinesGames);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MachinesGamesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\MachinesGamesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
