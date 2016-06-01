<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ThemingTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ThemingTable Test Case
 */
class ThemingTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ThemingTable
     */
    public $Theming;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.theming'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Theming') ? [] : ['className' => 'App\Model\Table\ThemingTable'];
        $this->Theming = TableRegistry::get('Theming', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Theming);

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
