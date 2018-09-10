<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BeneficioslistTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BeneficioslistTable Test Case
 */
class BeneficioslistTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BeneficioslistTable
     */
    public $Beneficioslist;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.beneficioslist'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Beneficioslist') ? [] : ['className' => BeneficioslistTable::class];
        $this->Beneficioslist = TableRegistry::getTableLocator()->get('Beneficioslist', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Beneficioslist);

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
