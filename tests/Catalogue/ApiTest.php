<?php

namespace Railken\LaraOre\Tests\Catalogue;

use Illuminate\Support\Facades\Config;
use Railken\LaraOre\Api\Support\Testing\TestableTrait;
use Railken\LaraOre\Catalogue\CatalogueFaker;

class ApiTest extends BaseTest
{
    use TestableTrait;

    /**
     * Retrieve basic url.
     *
     * @return string
     */
    public function getBaseUrl()
    {
        return Config::get('ore.api.http.admin.router.prefix').Config::get('ore.catalogue.http.admin.router.prefix');
    }

    /**
     * Test common requests.
     */
    public function testSuccessCommon()
    {
        $this->commonTest($this->getBaseUrl(), CatalogueFaker::make()->parameters());
    }
}
