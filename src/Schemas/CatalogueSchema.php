<?php

namespace Railken\Amethyst\Schemas;

use Railken\Amethyst\Managers\CatalogueManager;
use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class CatalogueSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\TextAttribute::make('name')
                ->setRequired(true)
                ->setUnique(true),
            Attributes\LongTextAttribute::make('description'),
            Attributes\LongTextAttribute::make('notes'),
            Attributes\BooleanAttribute::make('enabled'),
            Attributes\BelongsToAttribute::make('parent_id')
                ->setRelationName('parent')
                ->setRelationManager(CatalogueManager::class),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
