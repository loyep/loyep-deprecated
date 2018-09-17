<?php
//
//namespace App\Models;
//
//use App\Traits\HasMeta;
//use App\Traits\HasPermission;
//use App\Traits\HasRole;
//use Illuminate\Contracts\Routing\UrlRoutable;
//use Illuminate\Database\Eloquent\Model as BaseModel;
//use Illuminate\Database\Eloquent\Relations\MorphToMany;
//
//abstract class Model implements BaseModel, UrlRoutable
//{
//
//    use HasMeta, HasRole, HasPermission;
//
//    /**
//     * The underlying model resource instance.
//     *
//     * @var \Illuminate\Database\Eloquent\Model
//     */
//    public $resource;
//
//    /**
//     * Create a new resource instance.
//     *
//     * @param  \Illuminate\Database\Eloquent\Model $resource
//     * @return void
//     */
//    public function __construct($resource)
//    {
//        $this->resource = $resource;
//    }
//
//    /**
//     *
//     * The metas of this tag.
//     *
//     * @return MorphToMany
//     */
//    public function metas(): MorphToMany
//    {
//        return $this->morphToMany(Meta::class, 'metaable');
//    }
//
//    /**
//     * Get the underlying model instance for the resource.
//     *
//     * @return \Illuminate\Database\Eloquent\Model
//     */
//    public function model()
//    {
//        return $this->resource;
//    }
//}