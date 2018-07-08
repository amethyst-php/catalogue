<?php

namespace Railken\LaraOre\Tests\Catalogue;

use Illuminate\Support\Facades\Config;
use Railken\LaraOre\Catalogue\CatalogueFaker;
use Railken\LaraOre\Support\Testing\ApiTestableTrait;

class ApiTest extends BaseTest
{
    use ApiTestableTrait;

    /**
     * Retrieve basic url.
     *
     * @return string
     */
    public function getBaseUrl()
    {
        return Config::get('ore.api.router.prefix').Config::get('ore.catalogue.http.router.prefix');
    }

    /**
     * Test common requests.
     *
     * @return void
     */
    public function testSuccessCommon()
    {
        $this->commonTest($this->getBaseUrl(), CatalogueFaker::make()->parameters());
    }
}
