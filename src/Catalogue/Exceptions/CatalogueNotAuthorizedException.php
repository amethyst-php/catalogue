<?php

namespace Railken\LaraOre\Catalogue\Exceptions;

class CatalogueNotAuthorizedException extends CatalogueException
{
    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'CATALOGUE_NOT_AUTHORIZED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = "You're not authorized to interact with %s, missing %s permission";
}
