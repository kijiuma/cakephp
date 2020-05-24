<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HogeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HogeTable Test Case
 */
class HogeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HogeTable
     */
    protected $Hoge;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Hoge',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Hoge') ? [] : ['className' => HogeTable::class];
        $this->Hoge = TableRegistry::getTableLocator()->get('Hoge', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Hoge);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
