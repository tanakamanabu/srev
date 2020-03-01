<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EventRoomsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EventRoomsTable Test Case
 */
class EventRoomsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EventRoomsTable
     */
    protected $EventRooms;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.EventRooms',
        'app.Events',
        'app.Rooms',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EventRooms') ? [] : ['className' => EventRoomsTable::class];
        $this->EventRooms = TableRegistry::getTableLocator()->get('EventRooms', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EventRooms);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
