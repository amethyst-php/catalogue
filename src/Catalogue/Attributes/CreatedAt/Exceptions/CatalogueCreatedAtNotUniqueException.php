<?php

namespace Railken\LaraOre\Catalogue\Attributes\CreatedAt\Exceptions;

use Railken\LaraOre\Catalogue\Exceptions\CatalogueAttributeException;

class CatalogueCreatedAtNotUniqueException extends CatalogueAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'created_at';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'CATALOGUE_CREATED_AT_NOT_UNIQUE';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not unique';
}
