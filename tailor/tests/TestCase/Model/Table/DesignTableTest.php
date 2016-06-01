<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DesignTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DesignTable Test Case
 */
class DesignTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DesignTable
     */
    public $Design;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.design'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Design') ? [] : ['className' => 'App\Model\Table\DesignTable'];
        $this->Design = TableRegistry::get('Design', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Design);

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
