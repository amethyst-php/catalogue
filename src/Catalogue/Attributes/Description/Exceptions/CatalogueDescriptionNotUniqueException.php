<?php

namespace Railken\LaraOre\Catalogue\Attributes\Description\Exceptions;

use Railken\LaraOre\Catalogue\Exceptions\CatalogueAttributeException;

class CatalogueDescriptionNotUniqueException extends CatalogueAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'description';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'CATALOGUE_DESCRIPTION_NOT_UNIQUE';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not unique';
}
