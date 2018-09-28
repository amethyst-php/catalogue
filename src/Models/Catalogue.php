<?php

namespace Railken\Amethyst\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Config;
use Railken\Amethyst\Schemas\CatalogueSchema;
use Railken\Lem\Contracts\EntityContract;

class Catalogue extends Model implements EntityContract
{
    use SoftDeletes;

    /**
     * Creates a new instance of the model.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = Config::get('amethyst.catalogue.managers.catalogue.table');
        $this->fillable = (new CatalogueSchema())->getNameFillableAttributes();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(Catalogue::class);
    }
}
