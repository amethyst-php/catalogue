<?php

namespace Railken\LaraOre\Catalogue\Attributes\ParentId\Exceptions;

use Railken\LaraOre\Catalogue\Exceptions\CatalogueAttributeException;

class CatalogueParentIdNotAuthorizedException extends CatalogueAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'parent_id';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'CATALOGUE_PARENT_ID_NOT_AUTHTORIZED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = "You're not authorized to interact with %s, missing %s permission";
}
