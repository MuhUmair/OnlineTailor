<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UdratingTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UdratingTable Test Case
 */
class UdratingTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UdratingTable
     */
    public $Udrating;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.udrating'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Udrating') ? [] : ['className' => 'App\Model\Table\UdratingTable'];
        $this->Udrating = TableRegistry::get('Udrating', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Udrating);

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
