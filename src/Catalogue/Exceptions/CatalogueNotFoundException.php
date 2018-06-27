<?php

namespace Railken\LaraOre\Catalogue\Exceptions;

class CatalogueNotFoundException extends CatalogueException
{
    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'CATALOGUE_NOT_FOUND';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'Not found';
}
