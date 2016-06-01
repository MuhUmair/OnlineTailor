<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PeoplesayingTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PeoplesayingTable Test Case
 */
class PeoplesayingTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PeoplesayingTable
     */
    public $Peoplesaying;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.peoplesaying'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Peoplesaying') ? [] : ['className' => 'App\Model\Table\PeoplesayingTable'];
        $this->Peoplesaying = TableRegistry::get('Peoplesaying', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Peoplesaying);

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
