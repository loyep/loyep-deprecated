<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Loyep\Planet\Models\Meta;

trait HasMeta
{

    /**
     *
     * The metas of this tag.
     *
     * @return MorphToMany
     */
    public function metas(): MorphToMany
    {
        return $this->morphToMany(Meta::class, 'resource_metas');
    }

}