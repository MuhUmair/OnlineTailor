<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DesignimageTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DesignimageTable Test Case
 */
class DesignimageTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DesignimageTable
     */
    public $Designimage;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.designimage'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Designimage') ? [] : ['className' => 'App\Model\Table\DesignimageTable'];
        $this->Designimage = TableRegistry::get('Designimage', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Designimage);

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
