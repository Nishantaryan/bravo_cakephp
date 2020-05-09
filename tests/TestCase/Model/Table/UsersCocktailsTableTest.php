<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersCocktailsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersCocktailsTable Test Case
 */
class UsersCocktailsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersCocktailsTable
     */
    public $UsersCocktails;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.UsersCocktails',
        'app.Users',
        'app.Cocktails',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('UsersCocktails') ? [] : ['className' => UsersCocktailsTable::class];
        $this->UsersCocktails = TableRegistry::getTableLocator()->get('UsersCocktails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UsersCocktails);

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
