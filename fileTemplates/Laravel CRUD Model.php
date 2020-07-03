<?php
#if (${NAMESPACE})

#parse("PHP File Header.php")

namespace ${NAMESPACE};

#end

use App\Helpers\Macros\Traits\Languages;
use App\Models\Traits\{BelongsToProfile, BelongsToProject, HasImports, HasLanguagesList, HasMembers, HasPrefixesList, HasStatus};
use Backpack\CRUD\CrudTrait;
use Culpa\Traits\{Blameable, CreatedBy, DeletedBy, UpdatedBy};
use Illuminate\Database\Eloquent\{Model, SoftDeletes};
use Laracasts\Matryoshka\Cacheable;

class ${NAME} extends Model
{
    use CrudTrait;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    // const TABLE = '${NAME}s';
    // public \$table = self::TABLE;
    
    // protected \$primaryKey = 'id';
    // public \$timestamps = false;
    
    // use SoftDeletes, Blameable, CreatedBy, UpdatedBy, DeletedBy;
    // use Cacheable;
    // use Languages, HasLanguagesList, HasPrefixesList, HasMembers, HasImports;
    // use BelongsToProject, BelongsToProfile, HasStatus;
    // protected \$blameable = [ 'created' => 'created_user_id', 'updated' => 'updated_user_id', 'deleted' => 'deleted_user_id', ];
    // protected \$dates = [ 'deleted_at' ];
    // protected \$fillable = [];
    protected \$guarded = [ 'id' ];
    // protected \$hidden = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
