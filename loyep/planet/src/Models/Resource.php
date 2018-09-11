<?php

namespace Loyep\Planet\Models;

use Illuminate\Contracts\Routing\UrlRoutable;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Loyep\Planet\Traits\HasMeta;
use Loyep\Planet\Traits\HasPermission;
use Loyep\Planet\Traits\HasRole;

abstract class Resource implements UrlRoutable
{

    use HasMeta, HasRole, HasPermission;

    /**
     * The underlying model resource instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    public $resource;

    /**
     * Create a new resource instance.
     *
     * @param  \Illuminate\Database\Eloquent\Model $resource
     * @return void
     */
    public function __construct($resource)
    {
        $this->resource = $resource;
    }

    /**
     *
     * The metas of this tag.
     *
     * @return MorphToMany
     */
    public function metas(): MorphToMany
    {
        return $this->morphToMany(Meta::class, 'metaable');
    }

    /**
     * Get the underlying model instance for the resource.
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function model()
    {
        return $this->resource;
    }
}