<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TimeontaskTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TimeontaskTable Test Case
 */
class TimeontaskTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TimeontaskTable
     */
    public $Timeontask;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.timeontask',
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
        $config = TableRegistry::getTableLocator()->exists('Timeontask') ? [] : ['className' => TimeontaskTable::class];
        $this->Timeontask = TableRegistry::getTableLocator()->get('Timeontask', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Timeontask);

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
