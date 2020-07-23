<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CollaborateursTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CollaborateursTable Test Case
 */
class CollaborateursTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CollaborateursTable
     */
    public $Collaborateurs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.collaborateurs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Collaborateurs') ? [] : ['className' => CollaborateursTable::class];
        $this->Collaborateurs = TableRegistry::getTableLocator()->get('Collaborateurs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Collaborateurs);

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
}
