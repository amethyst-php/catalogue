<?php

namespace Railken\LaraOre\Tests\Catalogue;

use Railken\LaraOre\Support\Testing\ManagerTestableTrait;
use Railken\LaraOre\Catalogue\CatalogueManager;
use Railken\LaraOre\Catalogue\CatalogueFaker;

class ManagerTest extends BaseTest
{
    use ManagerTestableTrait;

    /**
     * Retrieve basic url.
     *
     * @return \Railken\Laravel\Manager\Contracts\ManagerContract
     */
    public function getManager()
    {
        return new CatalogueManager();
    }

    public function testSuccessCommon()
    {
        $this->commonTest($this->getManager(), CatalogueFaker::make());
    }
}
