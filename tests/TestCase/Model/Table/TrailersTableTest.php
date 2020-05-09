<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TrailersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TrailersTable Test Case
 */
class TrailersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TrailersTable
     */
    public $Trailers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Trailers',
        'app.Drivers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Trailers') ? [] : ['className' => TrailersTable::class];
        $this->Trailers = TableRegistry::getTableLocator()->get('Trailers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Trailers);

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
