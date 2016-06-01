<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SocialmediaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SocialmediaTable Test Case
 */
class SocialmediaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SocialmediaTable
     */
    public $Socialmedia;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.socialmedia'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Socialmedia') ? [] : ['className' => 'App\Model\Table\SocialmediaTable'];
        $this->Socialmedia = TableRegistry::get('Socialmedia', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Socialmedia);

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
