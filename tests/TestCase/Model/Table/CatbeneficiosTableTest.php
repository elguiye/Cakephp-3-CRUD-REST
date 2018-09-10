<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CatbeneficiosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CatbeneficiosTable Test Case
 */
class CatbeneficiosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CatbeneficiosTable
     */
    public $Catbeneficios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.catbeneficios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Catbeneficios') ? [] : ['className' => CatbeneficiosTable::class];
        $this->Catbeneficios = TableRegistry::getTableLocator()->get('Catbeneficios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Catbeneficios);

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
