<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BaysTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BaysTable Test Case
 */
class BaysTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BaysTable
     */
    public $Bays;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Bays',
        'app.Trailers',
        'app.Locations',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Bays') ? [] : ['className' => BaysTable::class];
        $this->Bays = TableRegistry::getTableLocator()->get('Bays', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Bays);

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
