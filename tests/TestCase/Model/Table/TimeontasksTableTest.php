<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TimeontasksTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TimeontasksTable Test Case
 */
class TimeontasksTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TimeontasksTable
     */
    public $Timeontasks;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.timeontasks',
        'app.tasks'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Timeontasks') ? [] : ['className' => TimeontasksTable::class];
        $this->Timeontasks = TableRegistry::getTableLocator()->get('Timeontasks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Timeontasks);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
