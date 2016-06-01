<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DesigntypeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DesigntypeTable Test Case
 */
class DesigntypeTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DesigntypeTable
     */
    public $Designtype;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.designtype'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Designtype') ? [] : ['className' => 'App\Model\Table\DesigntypeTable'];
        $this->Designtype = TableRegistry::get('Designtype', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Designtype);

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
