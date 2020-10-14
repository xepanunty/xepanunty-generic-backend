<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\HasTranslations;
use Illuminate\Database\Eloquent\Model;

class ModelHasRoles extends Model
{
    use CrudTrait;
    use HasTranslations;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */
    public $translatable = ['name'];
    protected $table = 'model_has_roles';
    public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['role_id', 'model_type', 'model_id'];

}